<?php

/**
 * Plugin Name: Celestial Core Plugin
 * Description: This plugin contains all the core functionality required for the starter kit to work properly
 */

if (!defined('ABSPATH')) {
    exit;
}


require_once __DIR__ . '/vendor/autoload.php';

use ValeraVilks\Celestial\LandingPages\LandingPages;

LandingPages::init();

/**
 * Enqueues JavaScript files for custom blocks in the WordPress block editor.
 *
 * This function hooks into the WordPress block editor to register and load JavaScript files
 * needed for custom block functionality. It uses wp_enqueue_script() to properly load
 * the block scripts in the editor context.
 */
add_action( 'enqueue_block_editor_assets', 'core_enqueue_block_editor_assets' );

function core_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'core-blocks',
		plugins_url( 'editor/build/index.js', __FILE__ )
	);
}
