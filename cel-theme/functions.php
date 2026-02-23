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
