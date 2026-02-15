<?php
/**
 * Modules bootstrap.
 *
 * @package Celestial
 */

namespace ValeraVilks\Celestial;

use ValeraVilks\Celestial\LandingPages\LandingPages;

/**
 * Centralized modules initializer.
 */
class Modules {
	/**
	 * Initializes all modules.
	 *
	 * @return void
	 */
	public static function init() {
		LandingPages::init();
	}
}
