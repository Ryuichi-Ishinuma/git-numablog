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

//投稿サムネイルの有効化
add_theme_support( 'post-thumbnails' );


// 人気記事
function getPostViews($postID) {
  $count_key = "post_views_count";
  $count = get_post_meta($postID, $count_key, true);
  if($count == "") {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count. "Views";
}

function setPostViews($postID) {
  $count_key = "post_view_count";
  $count = get_post_meta($postID, $count_key, true);
  if($count == "") {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, "0");
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action("wp_head", "adjacent_posts_rel_link_wp_head", 10, 0);
