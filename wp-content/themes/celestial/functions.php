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
 * Removes core patterns and registers theme pattern categories.
 *
 * @return void
 */
function celestial_theme_register_patterns(): void {
	remove_theme_support( 'core-block-patterns' );

	register_block_pattern_category(
		'page',
		array(
			'label' => __( 'Pages', 'celestial-fse-theme' ),
		)
	);
}
add_action( 'init', 'celestial_theme_register_patterns' );

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
