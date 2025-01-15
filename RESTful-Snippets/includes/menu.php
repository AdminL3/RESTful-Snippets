<?php

function wp_api_menu() {
    add_menu_page('WP - API', 'API - Settings', 'manage_options', 'wp_api', 'wp_api_settings_page');
}
add_action('admin_menu', 'wp_api_menu');
