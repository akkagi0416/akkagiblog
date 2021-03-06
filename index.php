<?php get_header(); ?>
<div class="contents">
    <div class="main">
        <div class="primary">
<?php
    if( is_search() ) :
?>
            <h2>検索結果: <span><?php the_search_query();?></span></h2>
<?php
    endif;
?>
<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post();
?>
            <section>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumbnail">
<?php
            if( has_post_thumbnail() ) :
?>
                        <?php the_post_thumbnail('thumbnail'); ?>
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
            </section>		
<?php
        endwhile;
    endif;
?>
            <div class="pagenate">
<?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => true,
        'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;'),
    ) );
?>
            </div><!--//.pagenate -->
        </div><!--//.primary -->
<?php get_template_part( 'secondary' ); ?>
    </div><!-- //.main -->
<?php get_sidebar(); ?>
</div><!-- //.contents -->
<?php get_footer(); ?>
