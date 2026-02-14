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

add_action('enqueue_block_editor_assets', function () {
	$build_dir = __DIR__ . '/build/editor/';

	if (
		! file_exists($build_dir . '/index.js') ||
		! file_exists($build_dir . '/index.asset.php')
	) {
		return;
	}

	$asset = require $build_dir . '/index.asset.php';

	wp_enqueue_script(
		'celestial-editor',
		plugins_url('build/index.js', __FILE__),
		$asset['dependencies'],
		$asset['version'],
		true
	);
});
