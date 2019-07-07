<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><!--font-awesomeのスタイルシートの呼び出し-->
    <script src="main.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header class="site-header">
    <!-- <div class="header-inner">
        <div class="site-title">
            <h1><a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_2814.JPG" alt="<?php bloginfo( 'name' ); ?>"/>
            </a></h1>
        </div> -->

        <div class="site-title">
            <h1><a href="<?php echo home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
            </a></h1>
        </div>
    
<!--スマホ用メニューボタン-->
        <button type="button" id="navbutton">
            <i class="fas fa-list-ul"></i>
        </button>

<!--ヘッダーメニュー-->
    </div>
    <div class="header-nav-area">
      <?php wp_nav_menu( array(
        'theme_location' => 'header-nav',
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
    ) ); ?>
    </div>

    <?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
        <meta name="robots" content="noindex"/>
    <?php endif; ?>
</header>
    