<?php
/**
 * Theme setup.
 *
 * @package Celestial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Disables block patterns registered by WordPress Core.
 *
 * @return void
 */
function celestial_disable_core_patterns(): void {
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', 'celestial_disable_core_patterns' );

/**
 * Unregisters the default Query Loop patterns.
 *
 * @return void
 */
function celestial_unregister_core_query_patterns(): void {
	if ( ! function_exists( 'unregister_block_pattern' ) ) {
		return;
	}

	$patterns = [
		'core/query-standard-posts',
		'core/query-medium-posts',
		'core/query-small-posts',
		'core/query-grid-posts',
		'core/query-large-title-posts',
		'core/query-offset-posts',
	];

	foreach ( $patterns as $pattern ) {
		unregister_block_pattern( $pattern );
	}
}

add_action( 'init', 'celestial_unregister_core_query_patterns', 999 );

/**
 * Registers block-specific theme stylesheets.
 *
 * @return void
 */
function celestial_theme_register_block_styles(): void {
	$styled_blocks = array( 'image', 'button' );

	foreach ( $styled_blocks as $block_name ) {
		$path = "assets/blocks/{$block_name}.css";

		wp_enqueue_block_style(
			"core/{$block_name}",
			array(
				'handle' => "celestial-{$block_name}",
				'src'    => get_theme_file_uri( $path ),
				'path'   => get_theme_file_path( $path ),
			)
		);
	}
}
add_action( 'init', 'celestial_theme_register_block_styles' );
