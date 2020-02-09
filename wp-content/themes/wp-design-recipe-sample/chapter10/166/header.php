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
            <?php 
            $args = array(
                'theme_location' => 'header_nav',
                'container' => 'nav',
                'container_class' => 'main-nav close',
                'container_id' => '',
                'menu_class' => 'global_menu',
                'menu_id' => 'gnav',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
            );
            wp_nav_menu($args);
            ?>
        </div>
    </div>
    
</header>
<!-- /header.main-header -->

<?php if(!is_front_page()): ?>

<div class="breadcrumb">
    <div class="container">
    <?php
    if(function_exists('bcn_display')){
        bcn_display();
    }
    ?>
    </div>
</div>

<?php endif; ?>