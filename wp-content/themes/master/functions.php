<?php 

function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

function tarful_register_menus() {
	register_nav_menus( array('main' => 'Main',));
}
add_action( 'init', 'tarful_register_menus' );