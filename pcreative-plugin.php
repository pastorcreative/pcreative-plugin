<?php

/**
 * Plugin Name:       pCreative plugin
 * Description:       A starter plugin boilerplate
 * Version:           1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Paco Pastor
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pcreative-plugin
 * Domain Path:       /languages
 */

defined('ABSPATH') or die('Hey, fuck that, get off here');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('PLUGIN', plugin_basename( __FILE__ ));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

// Se ejecuta al activar el plugin
function activate_pcreative_plugin() {
    Activate::activate();
}

// Se ejecuta al desactivar el plugin
function deactivate_pcreative_plugin() {
    Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_pcreative_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_pcreative_plugin' );


/**
 * Inicializamos todas las clases core del plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}