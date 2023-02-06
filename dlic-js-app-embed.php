<?php

/**
 * Dlic JS APP Embed - React Vue Javascript App embedded plugin
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link
 * @since             1.0.0
 * @package           dlic-js-app-embed
 *
 * @wordpress-plugin
 * Plugin Name:       Dlic JS APP Embed
 * Plugin URI:        http://delightincode.com/
 * Description:       React Vue Javascript App embedded plugin into your existing WordPress sites.
 * Version:           1.0.0
 * Author:            DelightinCode
 * Author URI:        delightincode.com
 * License:
 * License URI:
 * Text Domain:       dlic-js-app-embed
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

if (file_exists(__DIR__ . '/includes/main.php')) {
	require_once __DIR__ . '/includes/main.php';
}


define('DLJA_VERSION', '1.0.0');
define('IS_WINDOWS', PHP_OS_FAMILY === 'Windows');
define('DLJA_PLUGIN_URL', IS_WINDOWS ? str_replace('\\', '/', plugin_dir_url(__FILE__)) : plugin_dir_url(__FILE__));
define('DLJA_PLUGIN_PATH', IS_WINDOWS ? str_replace('\\', '/', plugin_dir_path(__FILE__)) : plugin_dir_path(__FILE__));
define('DLJA_APPS_PATH','' );
define('DLJA_APPS_URL', '');

/**
 *  Start to execution of the plugin.
 * @since    1.0.0
 */
function run_dlic_js_app() {

	$plugin = new Main();
	$plugin->run();
}
run_dlic_js_app();
