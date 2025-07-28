<?php

/*
 * Plugin Name: Landing Pages
 * Description: A powerful tool for creating and managing custom landing pages with clean URLs. This plugin registers a custom post type 'landing' that allows you to build dedicated landing pages with custom fields, featured images, and SEO-friendly URLs using the '/lp/' slug structure.
 * Version: 0.1.0
 * Author: dreamersofday
 * Author URI: https://dreamersofday.co
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: landing-pages
 * Domain Path: /languages
 * Requires at least: 5.0
 * Tested up to: 6.3
 * Requires PHP: 8.0
 * Network: false
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

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
        'description' => 'Custom post type for creating landing pages with clean URLs',
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
        'menu_icon' => 'dashicons-format-aside',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'excerpt']
    ]);
});

// Force rewrite rules update on plugin activation
register_activation_hook(__FILE__, function () {
    flush_rewrite_rules();
});

register_deactivation_hook(__FILE__, function () {
    flush_rewrite_rules();
});
