<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://contentupgrade.me
 * @since             1.0.0
 * @package           ContentUpgrade_Me_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Lead Magnets by ContentUpgrade.me
 * Plugin URI:        https://contentupgrade.me/wordpress
 * Description:       ContentUpgrade.me lets you upload your lead magnets once and embed it everywhere.
 * Version:           1.0.0
 * Author:            Ryan Crispin Heneise
 * Author URI:        https://contentupgrade.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       contentupgrade-me
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-contentupgrade-me-activator.php
 */
function activate_ContentUpgrade_Me_Plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contentupgrade-me-activator.php';
	ContentUpgrade_Me_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-contentupgrade-me-deactivator.php
 */
function deactivate_ContentUpgrade_Me_Plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contentupgrade-me-deactivator.php';
	ContentUpgrade_Me_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ContentUpgrade_Me_Plugin' );
register_deactivation_hook( __FILE__, 'deactivate_ContentUpgrade_Me_Plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-contentupgrade-me.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ContentUpgrade_Me_Plugin() {

	$plugin = new ContentUpgrade_Me_Plugin();
	$plugin->run();

}
run_ContentUpgrade_Me_Plugin();
