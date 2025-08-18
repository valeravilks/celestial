<?php

// Remove default patterns
add_action('init', function() {
    remove_theme_support( 'core-block-patterns' );
});

add_action( 'init', 'themeslug_enqueue_block_styles' );

function themeslug_enqueue_block_styles() {
    wp_enqueue_block_style( 'core/button', array(
        'handle' => 'themeslug-block-image',
        'src'    => get_theme_file_uri( "assets/blocks/core-button.css" ),
        'path'   => get_theme_file_path( "assets/blocks/core-button.css" )
    ) );
}
