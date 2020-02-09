<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- header.main-header -->
<header class="main-header">
    <div class="container header">
        <div class="logo">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/restaurant-logo.png" alt="">
            </a>
        </div>

        <?php get_search_form(); ?>

    </div>
    <div class="container navigation">
        <div class="main-nav-open"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url(home_url('/menu')); ?>">メニュー</a></li>
                <li>
                    <?php 
                    $cat = get_category_by_slug('news');
                    $cat_id = $cat->term_id;
                    $cat_link = get_category_link($cat_id);
                    ?>
                    <a href="<?php echo esc_url($cat_link); ?>">お知らせ</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</header><!-- /header.main-header -->