<?php
/**
 * Landing page content type and meta.
 *
 * @package Celestial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers the landing page custom post type.
 *
 * @return void
 */
function celestial_core_register_landing_page_post_type(): void {
	register_post_type(
		'landing-page',
		array(
			'labels'        => array(
				'name'               => 'Landing Pages',
				'singular_name'      => 'Landing Page',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New Landing Page',
				'edit_item'          => 'Edit Landing Page',
				'new_item'           => 'New Landing Page',
				'view_item'          => 'View Landing Page',
				'search_items'       => 'Search Landing Pages',
				'not_found'          => 'No landing pages found',
				'not_found_in_trash' => 'No landing pages found in Trash',
				'all_items'          => 'All Landing Pages',
				'menu_name'          => 'Landing Pages',
			),
			'public'        => true,
			'show_in_rest'  => true,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'has_archive'   => false,
			'rewrite'       => array( 'slug' => 'landing-page' ),
			'menu_icon'     => 'dashicons-welcome-write-blog',
			'menu_position' => 20,
		)
	);
}
add_action( 'init', 'celestial_core_register_landing_page_post_type' );

/**
 * Registers landing page meta fields.
 *
 * @return void
 */
function celestial_core_register_landing_page_meta(): void {
	$auth_callback = static function () {
		return current_user_can( 'edit_posts' );
	};

	register_post_meta(
		'landing-page',
		'_landing_subtitle',
		array(
			'type'          => 'string',
			'single'        => true,
			'show_in_rest'  => true,
			'auth_callback' => $auth_callback,
		)
	);

	register_post_meta(
		'landing-page',
		'_landing_cta_text',
		array(
			'type'          => 'string',
			'single'        => true,
			'show_in_rest'  => true,
			'auth_callback' => $auth_callback,
		)
	);

	register_post_meta(
		'landing-page',
		'_landing_cta_url',
		array(
			'type'              => 'string',
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'esc_url_raw',
			'auth_callback'     => $auth_callback,
		)
	);
}
add_action( 'init', 'celestial_core_register_landing_page_meta' );
