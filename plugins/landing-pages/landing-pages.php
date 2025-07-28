<?php

/*
 * Plugin Name: Landing Pages Tool
 */

add_action('init', function () {
    register_post_type('landing', [
        'labels' => [
            'name' => 'Landing Pages',
            'singular_name' => 'Landing Page',
            'add_new' => 'Add Landing Page',
            'add_new_item' => 'Add New Landing Page',
            'edit_item' => 'Edit Landing Page',
            'new_item' => 'New Landing Page',
            'view_item' => 'View Landing Page',
            'search_items' => 'Search Landing Pages',
            'not_found' => 'No landing pages found',
            'not_found_in_trash' => 'No landing pages found in trash',
            'menu_name' => 'Landing Pages'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => [
            'slug' => 'lp',
            'with_front' => false // Removes URL prefix
        ],
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']
    ]);
});

// Force rewrite rules update on plugin activation
register_activation_hook(__FILE__, function () {
    flush_rewrite_rules();
});

register_deactivation_hook(__FILE__, function () {
    flush_rewrite_rules();
});
