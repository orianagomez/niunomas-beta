<?php 

function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

function enqueue_theme_scripts(){
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', false);
    wp_enqueue_script('custom', get_stylesheet_directory_uri(). '/libs/script.js', array('jquery'), '', false);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

function tarful_register_menus() {
	register_nav_menus( array('main' => 'Main',));
}
add_action( 'init', 'tarful_register_menus' );