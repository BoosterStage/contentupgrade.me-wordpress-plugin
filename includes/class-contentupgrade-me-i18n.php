<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://contentupgrade.me
 * @since      1.0.0
 *
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/includes
 * @author     Ryan Crispin Heneise <ryan@mysmallidea.com>
 */
class ContentUpgrade_Me_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'contentupgrade-me',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
