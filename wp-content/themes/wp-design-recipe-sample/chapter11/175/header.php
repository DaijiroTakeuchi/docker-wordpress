<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- header.main-header -->
<header class="main-header">
    <div class="container header">
        <div class="logo">
            <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/travelinn-logo.png" alt="">
        </div>

        <?php get_search_form(); ?>

    </div>
    <div class="container navigation">
        <div class="main-nav-open"><i class="fa fa-bars" aria-hidden="true"></i></div>

        <?php 
        $args = array(
            'theme_location' => 'header_nav',
            'container' => 'nav', // 大外の要素を囲む。divかnav、囲まないならfalse
            'container_class' => 'main-nav',
            'container_id' => '',
            /*
            'menu_class' => 'global_menu', // <ul>のクラス
            'menu_id' => 'gnav', // <ul>のid。空欄にしても消えないので、なにかつける
            'before' => '', // リンクテキストの前につけるテキスト。アイコンなどを表示したいときに使える
            'after' => '', // リンクテキストの後につけるテキスト。アイコンなどを表示したいときに使える
            'link_before' => '', // <a>の前につけるテキスト。アイコンなどを表示したいときに使える
            'link_after' => '', // <a>の後につけるテキスト。アイコンなどを表示したいときに使える
            // その他いくつかあるがまあそれはいいことにする
            */
        );
        wp_nav_menu($args);
        ?>
    </div>
</header><!-- /header.main-header -->
