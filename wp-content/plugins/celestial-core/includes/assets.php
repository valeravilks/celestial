<?php
/**
 * Editor and block assets.
 *
 * @package Celestial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues the plugin editor script when it has been built.
 *
 * @return void
 */
function celestial_core_enqueue_editor_assets(): void {
	$build_dir = CELESTIAL_CORE_PATH . 'build/editor/';

	if (
		! file_exists( $build_dir . 'index.js' ) ||
		! file_exists( $build_dir . 'index.asset.php' )
	) {
		return;
	}

	$asset = require $build_dir . 'index.asset.php';

	wp_enqueue_script(
		'cel-editor',
		plugins_url( 'build/editor/index.js', CELESTIAL_CORE_FILE ),
		$asset['dependencies'],
		$asset['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'celestial_core_enqueue_editor_assets' );

/**
 * Registers built block types.
 *
 * @return void
 */
function celestial_core_register_blocks(): void {
	$build_dir = CELESTIAL_CORE_PATH . 'build/blocks';
	$manifest  = $build_dir . '/blocks-manifest.php';

	if ( ! file_exists( $manifest ) ) {
		return;
	}

	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( $build_dir, $manifest );
		return;
	}

	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( $build_dir, $manifest );
	}

	$manifest_data = require $manifest;
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( "{$build_dir}/{$block_type}" );
	}
}
add_action( 'init', 'celestial_core_register_blocks' );
