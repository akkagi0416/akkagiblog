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
        <nav><?php wp_nav_menu(); ?></nav>
        </header>

        <div id="main">
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post();
?>
            <article>
            <a href="<?php the_permalink(); ?>">
                <div class="thumbnail">
<?php
            if( has_post_thumbnail() ) :
?>
                <?php the_post_thumbnail(); ?>
<?php
            else :
?>
<?php
            endif;
?>
                </div><!-- //.thumbnail -->	
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>
                    <?php the_content(); ?>
                </div><!-- //.content -->
            </a>
            </article>		
<?php
        endwhile;
    endif;
?>
        </div><!-- //#main -->
        <div id="sidebar">
        </div><!-- //#sidebar -->
        <?php wp_footer(); ?>
    </body>
</html>
