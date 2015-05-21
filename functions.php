<?php

register_nav_menus( array( 'nav' => 'ナビゲーション' ) );

register_sidebar();

add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb150', 150, 150 );
