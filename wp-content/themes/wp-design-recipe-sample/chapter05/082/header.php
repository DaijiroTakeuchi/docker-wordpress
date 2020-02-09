<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body class="home">

<!-- header.main-header -->
<header class="main-header">
    <div class="container header">
        <div class="logo">
            <img class="logo-img" src="images/restaurant-logo.png" alt="">
        </div>
        <form id="searchform" method="GET" action="/" class="form-inline kp-header-searchinput" role="search">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="検索" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info" type="submit"><i class="fas fa-search"></i><span>検索</span></button>
                </div>
            </div>
        </form>
    </div>
    <div class="container navigation">
        <div class="main-nav-open"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="main-nav">
            <ul>
                <li><a href="">ホーム</a></li>
                <li><a href="">メニュー</a></li>
                <li><a href="">お知らせ</a></li>
                <li><a href="">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</header><!-- /header.main-header -->