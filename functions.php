<?php

register_nav_menus( array( 'nav' => 'ナビゲーション' ) );

register_sidebar();

add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb150', 150, 150 );

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
