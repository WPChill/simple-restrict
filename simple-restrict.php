<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpchill.com
 * @since             1.0.0
 * @package           Simple_Restrict
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Restrict
 * Description:       Restrict pages based on permissions assigned to pages and granted in user profiles.
 * Version:           1.2.8
 * Author:            WPChill
 * Author URI:        https://wpchill.com
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-restrict
 * Tested up to:      6.8
 * Domain Path:       /languages
 *
 *
 *  Original Plugin URI:    http://www.awakensolutions.com/simple-restrict/
 *  Original Author URI:    http://www.awakensolutions.com
 *  Original Author:        Awaken Solutions Inc.
 *  Awaken Solutions Inc. has transferred ownership to WPChill on: 10th of February, 2024.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-simple-restrict-activator.php
 */
function activate_simple_restrict() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-restrict-activator.php';
	Simple_Restrict_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-simple-restrict-deactivator.php
 */
function deactivate_simple_restrict() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-restrict-deactivator.php';
	Simple_Restrict_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_simple_restrict' );
register_deactivation_hook( __FILE__, 'deactivate_simple_restrict' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simple-restrict.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_simple_restrict() {

	$plugin = new Simple_Restrict();
	$plugin->run();

}
run_simple_restrict();
