<?php
/**
 * Plugin Name: Celestial Core Plugin
 * Description: This plugin contains all the core functionality required for the starter kit to work properly
 * Version: 1.0.0
 *
 * @package Celestial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/modules/LandingPages/CPT.php';
require_once __DIR__ . '/modules/LandingPages/Meta.php';
require_once __DIR__ . '/modules/LandingPages/LandingPages.php';
require_once __DIR__ . '/modules/Modules.php';

use ValeraVilks\Celestial\Modules;

Modules::init();

/**
 * Register Gutenberg block editor assets.
 */

add_action(
	'enqueue_block_editor_assets',
	function () {
		$build_dir = __DIR__ . '/build/editor/';

		if (
		! file_exists( $build_dir . '/index.js' ) ||
		! file_exists( $build_dir . '/index.asset.php' )
		) {
			return;
		}

		$asset = require $build_dir . '/index.asset.php';

		wp_enqueue_script(
			'cel-editor',
			plugins_url( 'build/editor/index.js', __FILE__ ),
			$asset['dependencies'],
			$asset['version'],
			true
		);
	}
);

/**
 * Register blocks as in the @wordpress/create-block package.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/packages/create-block/lib/templates/plugin/%24slug.php.mustache
 */

add_action(
	'init',
	function () {
		$manifest = __DIR__ . '/build/blocks/blocks-manifest.php';

		if ( ! file_exists( $manifest ) ) {
			return;
		}

		if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
			wp_register_block_types_from_metadata_collection( __DIR__ . '/build/blocks', $manifest );
			return;
		}

		if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
			wp_register_block_metadata_collection( __DIR__ . '/build/blocks', $manifest );
		}

		$manifest_data = require $manifest;
		foreach ( array_keys( $manifest_data ) as $block_type ) {
			register_block_type( __DIR__ . "/build/blocks/{$block_type}" );
		}
	}
);
