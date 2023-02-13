<?php
/**
 *
 * @since             1.0.0
 * @package           dlic-js-app-embed
 *
 */


function my_menu_pages(){
    add_menu_page('JS APP Embed', 'JS APP Embed', 'manage_options', 'my-menu', 'my_menu_output' );
    add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu' );
    add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}

 ?>
