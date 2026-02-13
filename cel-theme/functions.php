<?php

// Remove default patterns
add_action('init', function() {
    remove_theme_support( 'core-block-patterns' );
});

// Register custom pattern category
add_action('init', function() {
    register_block_pattern_category('page', array(
        'label' => __('Pages', 'celestial-fse-theme')
    ));
});

add_action( 'init', 'themeslug_enqueue_block_styles' );

function themeslug_enqueue_block_styles() {
    wp_enqueue_block_style( 'core/image', array(
        'handle' => 'themeslug-block-image',
        'src'    => get_theme_file_uri( "assets/blocks/core-image.css" ),
        'path'   => get_theme_file_path( "assets/blocks/core-image.css" )
    ) );
}

add_action( 'init', 'themeslug_enqueue_block_styles_button' );

function themeslug_enqueue_block_styles_button() {
    wp_enqueue_block_style( 'core/button', array(
        'handle' => 'themeslug-block-image',
        'src'    => get_theme_file_uri( "assets/blocks/core-button.css" ),
        'path'   => get_theme_file_path( "assets/blocks/core-button.css" )
    ) );
}



/**
 * Register block patterns programmatically (test caching behaviour).
 */
add_action( 'init', function () {

	// На всякий случай: категория "content" должна существовать (обычно существует),
	// но если вдруг нет — зарегистрируем.
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'content',
			[
				'label' => __( 'Content', 'celestial-fse-theme' ),
			]
		);
	}

	register_block_pattern(
		'celestial-fse-theme/example-page-programmatic',
		[
			'title'         => __( 'Example Page (Programmatic) 2', 'celestial-fse-theme' ),
			'description'   => __( 'Two-column starter-like layout (registered via register_block_pattern).', 'celestial-fse-theme' ),
			'categories'    => [ 'content' ],

			// Важно: это делает паттерн "контекстным" для Post Content.
			'blockTypes'    => [ 'core/post-content' ],

			// Доступен для page и post.
			'postTypes'     => [ 'page', 'post' ],

			// Это именно ширина превью, на фронт не влияет.
			'viewportWidth' => 1376,

			// Чуть-чуть изменённый контент (добавил heading и поменял тексты).
			'content'       => implode(
				"\n",
				[
					'<!-- wp:columns {"verticalAlignment":"center"} -->',
					'<div class="wp-block-columns are-vertically-aligned-center">',

					'<!-- wp:column {"verticalAlignment":"center"} -->',
					'<div class="wp-block-column is-vertically-aligned-center">',
					'<!-- wp:heading {"level":2} -->',
					'<h2 class="wp-block-heading">Hello from Programmatic Pattern 2</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph -->',
					'<p>This pattern is registered via <code>register_block_pattern()</code>.</p>',
					'<!-- /wp:paragraph -->',
					'</div>',
					'<!-- /wp:column -->',

					'<!-- wp:column {"verticalAlignment":"center"} -->',
					'<div class="wp-block-column is-vertically-aligned-center">',
					'<!-- wp:paragraph -->',
					'<p>Hello 2 — slightly different text.</p>',
					'<!-- /wp:paragraph -->',
					'</div>',
					'<!-- /wp:column -->',

					'</div>',
					'<!-- /wp:columns -->',
				]
			),
		]
	);
} );
