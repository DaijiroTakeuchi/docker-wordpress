<?php

// テーマのセットアップ
function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    add_image_size('page_hero', 1200, 600, true);
}
add_action('after_setup_theme', 'theme_setup');

// カスタムメニュー
function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション',
        'footer_nav' => 'フッターに表示されるナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');

// CSS, JSファイルの読み込み
function enqueue_scripts(){
    //css
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700');

    // JavaScript
    wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/scripts/script.js', array('jquery-min-js'), '', true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// ディスクリプション
function description(){
    global $post;
    $term = get_post_meta($post->ID, 'description', true);
    if($term) {
        printf('<meta name="description" content="%s">', esc_html($term));
    } else {
        printf('<meta name="description" content="%s">', esc_html($post->post_excerpt));
    }
}
add_action('wp_head', 'description');

// カスタム投稿タイプ「hotel」をフィードに含める
function feed_custom($query) {
    if (is_feed()) {
        $post_type = $query->get('post_type');
        if(empty( $post_type )) {
            $query->set(
                'post_type',
                array(
                    'hotel',
                )
            );
            $query->set('orderby' , 'date');
            $query->set('order' , 'DESC');
        }
    }
}
add_action('pre_get_posts', 'feed_custom');

