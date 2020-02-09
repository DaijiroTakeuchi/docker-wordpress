<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/style.css" type="text/css">
    <!-- bootstrapを適用したい場合 -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script> -->
    <?php wp_deregister_script('jquery');?>
    <?php wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1'); ?>
    <?php wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', true );?>
    <?php wp_head(); ?>
</head>

<body>
    <div class="l-background">
        <div class="l-container">
            <header>
                <h1>
                    <a href="/">DaijiroBlog</a>
                </h1>
            </header>
        </div>

        <!-- Navigation -->
        <div class="c-gnav-wrapper">
            <div class="c-gnav">
                <?php wp_nav_menu(
                    array (
                        //カスタムメニュー名
                        'theme_location' => 'header-navi',
                        //コンテナを表示しない
                        'container' => false,
                        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                        'fallback_cb' => false,
                        //出力されるulに対してidやclassを表示しない
                        'items_wrap' => '<ul>%3$s</ul>',
                    )
                    ); 
                ?>
            </div>
        </div>
        <!-- Navigation -->

    </div>