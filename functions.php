<?php

function bst_child_enqueues() {

	wp_register_style('bst-child', get_bloginfo('stylesheet_directory') . '/css/bst-child.css', false, null);
	wp_enqueue_style('bst-child', 'bst-child');

	wp_enqueue_style( 'font-awesome.css', get_stylesheet_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'font-awesome-animation.min.css',  get_template_directory_uri() . '/css/font-awesome-animation.min.css' );
	wp_enqueue_style( 'font-awesome.min.css',  get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_script( 'scripts.js', get_stylesheet_directory_uri() . '/js/scripts.js' );


}
add_action('wp_enqueue_scripts', 'bst_child_enqueues', 101);

?>
