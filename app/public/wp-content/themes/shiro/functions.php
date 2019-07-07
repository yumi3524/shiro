<?php

//テーマのセットアップ
//titleタグをhead内に埋め込む
add_theme_support('title_tag');
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails' );

	
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );


//メニューボタンjs呼び出し
function navbutton_scripts(){
wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );


function widgetarea_init(){
    register_sidebar(array(
        'name'=>'サイドバー', //サイドバーの名前管理画面のウィジェット選択画面に表示される
        'id'=>'side-widget', //ウィジェットエリアにidをつける。ここで指定した値でsidebar.phpの中にサイドバーを呼び出します
        /*
            ウィジェットの前と後ろに要素を置きたい場合に値を指定します。
            ウィジェットアイテムの種類別に別々のid・class名が反映されるように『id="%1$s"』
            『class="%2$s"』と記述し、各ウィジェットごとの名前 + 各アイテム共通の『sidebar-wrapper』と
            いうclass名が反映されるように設定しています。
        */
        'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget'=>'</div>',
        /*
            各ウィジェットにタイトルが付けられた場合のタグを設定できます。
            上記のソースコードでは、見出しタグのh4タグでタイトルを括るように設定しています。
        */
        'before_title' => '<h4 class="sidebar-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'widgetarea_init');