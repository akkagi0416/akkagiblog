<?php
// wp_headの不要なものを削除
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );


register_nav_menus( array( 'nav' => 'ナビゲーション' ) );

register_sidebar();

add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb150', 150, 150 );
set_post_thumbnail_size(150,150,true);  // true:切り抜き false:リサイズ

/*
function my_scripts(){
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
*/
function my_scripts(){
    wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/myscript.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function new_excerpt_more($more){
    return '…';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// header内に任意のコードを読み込む
// https://www.wapoo-custom.com/custom_manual/head-tag-custum/
function head_original_load(){
  if(is_single() || is_page()){
    if($head_original_code = get_post_meta(get_the_ID(), 'head_load', false)){
      foreach($head_original_code as $head_code){
        echo $head_code . "\n";
      }
    }
  }
}
add_action('wp_head', 'head_original_load');
