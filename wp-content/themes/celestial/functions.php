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
 * Loads the theme translations.
 *
 * Translation files belong in the theme's languages directory.
 *
 * @return void
 */
function celestial_theme_load_textdomain(): void {
	load_theme_textdomain( 'celestial-fse-theme', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'celestial_theme_load_textdomain' );

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
 * Registers block-specific theme stylesheets.
 *
 * @return void
 */
function celestial_theme_register_block_styles(): void {
	$styled_blocks = array( 'button' );

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
