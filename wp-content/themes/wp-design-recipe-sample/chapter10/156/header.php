<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicons/safari-pinned-tab.svg" color="#0b8cdd">
<meta name="msapplication-TileColor" content="#0b8cdd">
<meta name="theme-color" content="#0b8cdd">

<?php wp_head(); ?>

</head>
<body class="archive">

<!-- header.main-header -->
<header class="main-header">
    <div class="container header">
        <div class="logo">
            <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
        </div>
        <div class="main-nav-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hamburger-menu.png" class="mobile-nav"></div>
        <div class="container navigation">
            <p class="catchcopy"><?php bloginfo('name'); ?></p>
            <nav class="main-nav close">
                <ul>
                    <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/menu')); ?>">メニュー</a></li>
                    <li>
                        <?php 
                        $cat = get_category_by_slug('news');
                        $cat_id = $cat->term_id;
                        $cat_link = get_category_link($cat_id);
                        ?>
                        <a href="<?php echo esc_url($cat_link); ?>">ニュース</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
</header>
<!-- /header.main-header -->