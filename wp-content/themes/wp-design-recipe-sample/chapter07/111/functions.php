<?php // functions.php

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_scripts(){
    //css
    wp_enqueue_style('main-css', get_stylesheet_uri());

    // JavaScript
    wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/scripts/script.js', array('jquery-min-js'), '', true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');