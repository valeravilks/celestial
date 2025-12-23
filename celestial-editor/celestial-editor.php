<?php
/**
 * Plugin Name: Celestial Editor
 * Description: Editor enhancements (block variations, filters, editor plugins).
 * Version: 0.1.0
 * Author: Valera Vilks
 */

add_action('enqueue_block_editor_assets', function () {
	$build_dir = __DIR__ . '/build';

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
