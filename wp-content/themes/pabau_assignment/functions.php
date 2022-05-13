<?php 

function load_stylesheets(){
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js(){
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script( 'bootstrap' );
    wp_register_script( 'formSubmit', get_template_directory_uri() . '/js/formSubmit.js', '', 1, true);
    wp_enqueue_script( 'formSubmit' );
}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');