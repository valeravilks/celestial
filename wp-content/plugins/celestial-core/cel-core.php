<?php
/**
 * Plugin Name: Celestial Core Plugin
 * Description: This plugin contains all the core functionality required for the starter kit to work properly
 * Version: 1.0.0
 *
 * @package Celestial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CELESTIAL_CORE_FILE', __FILE__ );
define( 'CELESTIAL_CORE_PATH', __DIR__ . '/' );

require_once __DIR__ . '/includes/assets.php';
require_once __DIR__ . '/includes/landing-pages.php';
