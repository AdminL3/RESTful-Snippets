<?php

/*
 *
 * @link              https://github.com/AdminL3/
 * @since             1.0.0
 * @package           RESTful_Snippets
 *
 * @wordpress-plugin
 * Plugin Name:       RESTful Snippets
 * Plugin URI:        https://github.com/AdminL3/restful-snippets
 * Description:       Effortlessly manage and update WordPress snippets via a secure REST API with RESTful Snippets.
 * Version:           1.0.0
 * Author:            Levi Blumenwitz
 * Author URI:        https://github.com/AdminL3/
 * License:           GPL-2.0+
 * Text Domain:       restful-snippets
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/menu.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/settings.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/api.php';


function wp_api_admin_assets() {
    $plugin_url = plugin_dir_url(__FILE__);
    wp_enqueue_style('wp-api-admin-style', $plugin_url . 'assets/style.css');
}
add_action('admin_enqueue_scripts', 'wp_api_admin_assets');
