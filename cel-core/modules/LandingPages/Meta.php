<?php

namespace ValeraVilks\Celestial\LandingPages;

class Meta {
	public static function init() {
		add_action( 'init', array( self::class, 'register' ) );
	}

	public static function register() {
		register_post_meta(
			'landing-page',
			'_landing_subtitle',
			array(
				'type'          => 'string',
				'single'        => true,
				'show_in_rest'  => true,
				'auth_callback' => function () {
					return current_user_can( 'edit_posts' );
				},
			)
		);

		register_post_meta(
			'landing-page',
			'_landing_cta_text',
			array(
				'type'          => 'string',
				'single'        => true,
				'show_in_rest'  => true,
				'auth_callback' => function () {
					return current_user_can( 'edit_posts' );
				},
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
				'auth_callback'     => function () {
					return current_user_can( 'edit_posts' );
				},
			)
		);
	}
}
