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
         wp_register_style('admin-main-style', DLIC_JSAPP_PLUGIN_URL . 'assets/css/admin-main.css', null, "1.0.0");

         /* JS */


     }
     function dlic_jsapp_admin_enqueue_scripts()
     {
         wp_enqueue_style('admin-main-style');
     }

 }
function dlic_appjs_embed() {
   return '<div id="root"></div>';
}
function dlic_plugins_loaded() {
	if(function_exists('add_shortcode')) {
        add_shortcode( 'appjs-embed', 'dlic_appjs_embed' );
    }
}

function dlic_enqueue_script() {
    wp_enqueue_script( 'dlic-js-app', DLIC_JSAPP_PLUGIN_URL . 'apps/dlic-js-app/build/jsappembed.js', array(), '1.0.0', true );
    wp_enqueue_script( 'dlic-js-app-execute', DLIC_JSAPP_PLUGIN_URL . 'assets/js/execute-react-script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'dlic_enqueue_script' );
add_action( 'plugins_loaded', 'dlic_plugins_loaded' );
