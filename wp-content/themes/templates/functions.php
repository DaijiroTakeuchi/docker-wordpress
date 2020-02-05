<?php 
add_theme_support('post-thumbnails');
add_theme_support('menus');
register_nav_menu('header-navi', 'ヘッダーナビ');

function imagepassshort($arg) {
    $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
    return $content;
}

add_action('the_content', 'imagepassshort');