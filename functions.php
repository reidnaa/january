<?php

function january_enqueue_scripts(){
    wp_register_style('stylecss', get_template_directory_uri() . '/style.css', array(),'1.0', false);
    wp_register_style('normalizecss', get_template_directory_uri() . '/css/normalize.css', array(),'8.0.1', false);
  
    
    wp_enqueue_style('stylecss');
    wp_enqueue_style('normalizecss');
    wp_enqueue_script('jquery');
    

}

add_action('wp_enqueue_scripts', 'january_enqueue_scripts');


function january_nav(){
   register_nav_menu('first_menu', 'First Menu');
   register_nav_menu('second_menu', 'Second Menu');
}
add_action('init', 'january_nav');

function january_image_sizes(){
    add_image_size( 'custom-size', 220, 180, true ); 
    add_image_size( 'cover', 1440, 480, true ); 
}

add_action('after_setup_theme', 'january_image_sizes');


add_theme_support( 'post-thumbnails' );