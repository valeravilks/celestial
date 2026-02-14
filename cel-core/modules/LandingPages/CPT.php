<?php

namespace ValeraVilks\Celestial\LandingPages;

class CPT {
	public static function init() {
		add_action( 'init', array( self::class, 'register' ) );
	}

	public static function register() {
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
}
