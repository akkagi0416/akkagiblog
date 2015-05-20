<?php get_header(); ?>
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
                <img src="http://lorempixel.com/150/150/city" alt="">
<?php
            endif;
?>
            </div><!-- //.thumbnail -->	
            <div class="content">
                <h2><?php the_title(); ?></h2>
                <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>
                <?php the_excerpt(); ?>
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
<?php get_footer(); ?>
