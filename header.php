<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo( 'title' ); ?></title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
            <p class="search"><i class="fa fa-search"></i></p>
            <form role="search" method="get" class="searchform" action="<?php home_url( '/' ); ?>">
                <input type="text" value name="s" placeholder="検索...">
                <input type="submit" value="検索">
            </form>
            <nav><?php wp_nav_menu(); ?></nav>
        </header>
