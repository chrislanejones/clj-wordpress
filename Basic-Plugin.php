<?php
    /**
    * Plugin Name: Basic Plugin
    * Plugin URI: http://www.chrislanejones.com
    * Author: Chris Lane Jones
    * Description: Basic Plugin Thing
    */


function dwwp_action_hook_example() {
remove_meta_box('dashboard_primary', 'dashboard', 'post_container_1');
}
add_action( 'wp_dashboard_setup', 'dwwp_action_hook_example');

function dwwp_add_google_link() {

global $wp_admin_bar;
var_dump($wp_admin_bar);
}
add_action();
