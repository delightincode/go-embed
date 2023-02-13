<?php
/**
 *
 * @since      1.0.0
 * @package    dlic-js-app-embed
 * @subpackage dlic-js-app-embed/includes
 * @author    DelightinCode(delightincode.com)
 */

class Dlic_JSApp_Admin_Menu{
    private $menupage = 'JS APP Embed';
    public function __construct() {

	}
    public function init() {
        add_action('admin_menu', array($this,'add_menu'));
	}
    public function add_menu(){
        $menupage = esc_html__('JS App', 'dlic-jsapp-embed');
        add_menu_page($menupage, $menupage, 'manage_options', 'js-app-embed',array($this,'page_content') );
        add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu' );
    }
    public function page_content(){?>
        <div class="dlic-jsapp__menupage">
            <div class="dlic-jsapp__container">
                <h1 class="main-heading">
                    JS APP Embed
                </h1>
                <div class="">
                    <p>Please use this shortcode to embed your JS application</p>
                    <p>[appjs-embed id='32']</p>
                </div>
            </div>
        </div>
        <?php
    }
}

?>
