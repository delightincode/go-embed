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
        $menupage = esc_html__('JS App Embed', 'dlic-jsapp-embed');
        add_menu_page($menupage, $menupage, 'manage_options', 'js-app-embed',array($this,'page_content') );
        add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu' );
    }
    public function page_content(){?>
        <div class="dlic-jsapp__menupage">
            <div class="dlic-header-page">
                JS APP Embed
            </div>
            <div class="dlic-jsapp__container">
                <div class="content">

                    <h2 class="mui--text-headline">Get started</h2>
                    <p class="mui--text-body2">You can use your own React Appplication or our example in <code>wp-content/plugins/jsapp-embed/apps/my-app</code> 
                    </p>
                    <p class="mui--text-body2">
                        We use <code>npx create-react-app</code> to create <code>my-app</code>, so you could do the same. After that, do the following step:
                    </p>
                    <p class="mui--text-body2">
                        1. Install <code>webpack</code> and copy 2 main files from our example app to your app:
                        <ul>
                            <li class="mui--text-body1"><code>webpack.config.js</code>: config webpack to build umd target</li>
                            <li><code>wpComponent.js</code>: declare a global function to render React App</li>
                        </ul>
                    </p>
                    <p class="mui--text-body2">
                        2. Edit package.json and add more script to build
                        <ul>
                            <li><code>"wp:build": "webpack --config webpack.config.js",</code></li>
                        </ul>    
                    </p>

                    <h2 class="mui--text-headline">Develop JS Appplication</h2>
                    <p class="mui--text-body2">
                        Like other JS Application, you can do this:
                        <ul>
                            <li>
                                <code>npm run start</code> to start and develop the app
                            </li>
                            <li>
                                <code>npm run wp:build</code> to build
                            </li>
                        </ul>
                    </p>

                    <h2 class="mui--text-headline">Usage</h2>
                    <p>
                        We use the folder name is the unique id of each application.
                        <br>
                        To embed the application into WordPress page, copy this shortcode <br>
                        <h5><code class="mui--bg-primary-light">[jsapp-embed id='my-app']</code></h5>
                        and embed to any WordPress content.
                        <br>
                        Let replace <code>my-app</code> by your application id.
                        <br>
                        <em>Every time you re-build the React App, let refresh the WordPress page to see the updates</em>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
}

?>
