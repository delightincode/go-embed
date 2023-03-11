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
 * Plugin Name:       JS APP Embed
 * Plugin URI:        http://delightincode.com/
 * Description:       React VueJS Javascript App embedded plugin into your existing WordPress sites.
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


require_once( "helper.php");
require_once( "define.php");

if (file_exists(__DIR__ . '/includes/main.php')) {
	require_once __DIR__ . '/includes/main.php';
}
