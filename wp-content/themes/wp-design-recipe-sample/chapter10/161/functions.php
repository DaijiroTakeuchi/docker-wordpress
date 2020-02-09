<?php // functions.php

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    add_image_size('page_hero', 1200, 600, true);
}
add_action('after_setup_theme', 'theme_setup');

function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション',
    ));
}
add_action('after_setup_theme', 'add_menus');

function enqueue_scripts(){
    //css
    wp_enqueue_style('main-css', get_stylesheet_uri());

    // JavaScript
    wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/scripts/script.js', array('jquery-min-js'), '', true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function add_widget_area(){
    register_sidebar(array(
        'id' => 'sidebar_top',
        'name' => 'サイドバー上部',
        'description' => 'サイドバー上部に設置するウィジェット領域',
    ));
}
add_action('widgets_init', 'add_widget_area');