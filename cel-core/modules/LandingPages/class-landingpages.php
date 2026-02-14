<?php
/**
 * Landing pages module bootstrap.
 *
 * @package Celestial
 */

namespace ValeraVilks\Celestial\LandingPages;

/**
 * Wires landing pages features.
 */
class LandingPages {
	/**
	 * Initializes landing pages components.
	 *
	 * @return void
	 */
	public static function init() {
		CPT::init();
		Meta::init();
	}
}
