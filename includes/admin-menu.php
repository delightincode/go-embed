<?php
/**
 *
 * @since      1.0.0
 * @package    dlic-js-app-embed
 * @subpackage dlic-js-app-embed/includes
 * @author    DelightinCode(delightincode.com)
 */

class Dlic_JSApp_Admin_Menu{
    public function init() {
        add_action('admin_menu', array($this,'add_menu'));
	}
    public function add_menu(){
        $menupage = esc_html__('JS App Embed', 'dlic-js-app-embed');
        add_menu_page($menupage, $menupage, 'manage_options', 'js-app-embed', array($this,'page_content'), DLIC_JSAPP_LOGO);
    }
    public function page_content(){?>
        <div class="dlic-jsapp__menupage">
            <div class="dlic-header-page">
                <img alt='jsapp-embed' class="dlic-logo-img" src="<?php echo DLIC_JSAPP_LOGO; ?>">JS APP Embed
            </div>
            <div class="dlic-jsapp__container">
                <div class="content">
                    <h2 class="mui--text-headline">Get started</h2>
                    <p class="mui--text-body2">You can use your own React Appplication or our example in <code>wp-content/plugins/jsapp-embed/apps/my-app</code> 
                    </p>
                    <p class="mui--text-body2">
                        We use <code>npx create-react-app</code> to create <code>my-app</code>, so you could do the same.
                    </p>
                    <p class="mui--text-body2">In order to have your app integrated into WordPress, there are a few steps you need to follow:</p>
                    <p class="mui--text-body2">
                        <h4>1. Place your existing or create a new ReactJS app in</h4>
                        <ul>
                            <li class="mui--text-body1"><code>wp-content/plugins/jsapp-embed/apps/wp-content/plugins/jsapp-embed/apps/</code></li>
                        </ul>
                    </p>
                    <p class="mui--text-body2">
                        <h4>2. Setup the app</h4>
                        <p class="mui--text-body2">You need a Module Bundler to build your app, in this case, you can use webpack, install it by running the command:</p>
                        <ul>
                            <li>
                            <p class="mui--text-body2"><code>npm install webpack</code></p>
                            </li>
                            <li>
                                Copy 2 files from our example app (<code>my-app</code>)  to your app:
                                <ul>
                                    <li class="mui--text-body1"><code>webpack.config.js</code>: config webpack to build umd target</li>
                                    <li><code>wpComponent.js</code>: declare a global function to render React App</li>
                                </ul>
                            </li>
                            <li>
                                Edit package.json and add more script to build
                                <ul>
                                    <li><code>"buildwp": "webpack --config webpack.config.js",</code></li>
                                </ul>    
                            </li>
                        </ul>
                    </p>
                    <h2 class="mui--text-headline">Develop JS Appplication</h2>
                    <p class="mui--text-body2">
                        Like other JS Application, you can do this:
                        <ul>
                            <li>
                                <code>npm install</code> to install node modules
                            </li>
                            <li>
                                <code>npm run start</code> to start and develop the app
                            </li>
                            <li>
                                <code>npm run buildwp</code> to build
                            </li>
                        </ul>
                    </p>

                    <h2 class="mui--text-headline">Usage</h2>
                    <p class="mui--text-body2">
                        We use the folder name is the unique id of each application.
                        <br>
                        To embed the application into WordPress page, copy this shortcode <br>
                        <h5><code class="mui--bg-primary-light">[jsapp-embed id='my-app']</code></h5>
                        and embed to any WordPress content.
                        <br>
                        Let replace <code>my-app</code> by your application id.
                        <br>
                        <br>
                        <em>Notes:</em>
                        <br>
                        <em>- You will need to build the React App in order to see your changes.</em>
                        <br>
                        <em>- Every time you re-build the React App, let refresh the WordPress page to see the updates</em>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
}

?>
