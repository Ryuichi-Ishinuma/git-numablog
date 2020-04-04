<?php
include(dirname(__FILE__) . "/functions/_settings.php");

// ウィジェット
include(dirname(__FILE__) . "/functions/_sidebar.php");

// カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション');

//概要（抜粋）の文字数
function my_length($length) {
    return 110;
}
add_filter('excerpt_mblength','my_length');

//概要（抜粋）の省略記号
function my_more($more) {
    return ' …';
}
add_filter('excerpt_more','my_more');

//投稿サムネイルの有効化
add_theme_support( 'post-thumbnails' );

//フッターメニュー
register_nav_menu('footer_menu','フッターメニュー');
