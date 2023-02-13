<?php

define('DLIC_JSAPP_VERSION', '1.0.0');
define('IS_WINDOWS', PHP_OS_FAMILY === 'Windows');
define('DLIC_JSAPP_PLUGIN_URL', IS_WINDOWS ? str_replace('\\', '/', plugin_dir_url(__FILE__)) : plugin_dir_url(__FILE__));
define('DLIC_JSAPP_PLUGIN_PATH', IS_WINDOWS ? str_replace('\\', '/', plugin_dir_path(__FILE__)) : plugin_dir_path(__FILE__));
 ?>
