<?php

/**
 * Plugin Name: Celestial Core Plugin
 * Description: This plugin contains all the core functionality required for the starter kit to work properly
 */

if (!defined('ABSPATH')) {
    exit;
}


require_once __DIR__ . '/vendor/autoload.php';

use ValeraVilks\Celestial\LandingPages\LandingPages;

LandingPages::init();
