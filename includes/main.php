<?php
/**
 *
 * @since      1.0.0
 * @package    dlic-js-app-embed
 * @subpackage dlic-js-app-embed/includes
 * @author    DelightinCode(delightincode.com)
 */

defined('ABSPATH') || exit;

if (is_admin() == true) {
    require_once DLIC_JSAPP_PLUGIN_PATH.'/includes/admin-menu.php';
    add_action('admin_init', 'dlic_jsapp_admin_init');
    add_action('admin_enqueue_scripts', 'dlic_jsapp_admin_enqueue_scripts');

    $admin_menu = new Dlic_JSApp_Admin_Menu();
    $admin_menu->init();


    function dlic_jsapp_admin_init(){
        /* CSS */
        wp_register_style('mui-css', DLIC_JSAPP_PLUGIN_URL . 'assets/vendors/mui.min.css', null, "1.0.0");
        wp_register_style('admin-main-style', DLIC_JSAPP_PLUGIN_URL . 'assets/css/admin-main.css', null, "1.0.0");

        /* JS */
        wp_register_script('pure-js', DLIC_JSAPP_PLUGIN_URL . 'assets/vendors/mui.min.js', null, "1.0.0");
    }
     
    function dlic_jsapp_admin_enqueue_scripts() {
        wp_enqueue_style('mui-css');
        wp_enqueue_style('admin-main-style');

        wp_enqueue_script('pure-js');
    }

}

function dlic_appjs_embed($atts) {
    $appid = dashToCamelCase($atts['id']);
    return '<div id="' . $appid . '"></div><script src="' . DLIC_JSAPP_PLUGIN_URL . 'apps/' . $atts['id'] . '/build/jsappembed.js" async></script>';
}
function dlic_plugins_loaded() {
	if(function_exists('add_shortcode')) {
        add_shortcode( 'appjs-embed', 'dlic_appjs_embed' );
    }
}

add_action( 'plugins_loaded', 'dlic_plugins_loaded' );
