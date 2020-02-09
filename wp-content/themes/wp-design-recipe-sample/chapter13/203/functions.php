<?php //functions.php

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_scripts(){
    // CSS
    wp_enqueue_style( 'main-css', get_stylesheet_uri() );

    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,500' );

    // JavaScript
    wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/scripts/script.js', array(), '3.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

// ウィジェット
function add_widget_area(){
    register_sidebar(array(
        'id' => 'sidebar_top',
        'name' => 'サイドバー',
        'description' => 'サイドバーに設置するウィジェット領域',
    ));
}
add_action('widgets_init', 'add_widget_area');

// ショートコード 基本形
function simple_shortcode($atts, $content) {
    return "<div>ショートコード例</div>";
}
add_shortcode('my_code', 'simple_shortcode');