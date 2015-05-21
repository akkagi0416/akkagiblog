<?php get_header(); ?>
<div id="main" class="single">
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post();
?>
    <article>
        <h2><?php the_title(); ?></h2>
        <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>
        <?php the_content(); ?>
    </article><!-- //.single -->		
<?php
        endwhile;
    endif;
?>
    <div class="navigation">
        <span class="prev"><?php previous_post_link( '&laquo;%link', '前の記事', TRUE ); ?></span>
        <span class="next"><?php next_post_link( '%link&raquo', '次の記事', TRUE ); ?></span>
    </div>
</div><!-- //#main -->
<?php get_template_part( 'sub' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
