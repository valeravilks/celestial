<?php

// Remove default patterns
add_action('init', function() {
    remove_theme_support( 'core-block-patterns' );
});
