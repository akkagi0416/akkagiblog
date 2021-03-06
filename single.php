<?php get_header(); ?>
<div class="contents">
    <div class="main single">
        <div class="primary">
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
<p>
<a href="https://twitter.com/share" class="twitter-share-button" data-via="akkagi0416" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</p>
            <div class="navigation">
                <span class="prev"><?php previous_post_link( '&laquo;%link', '前の記事', TRUE ); ?></span>
                <span class="next"><?php next_post_link( '%link&raquo', '次の記事', TRUE ); ?></span>
            </div>
        </div><!-- //.primary -->
<?php get_template_part( 'secondary' ); ?>
    </div><!-- //.main -->
<?php get_sidebar(); ?>
</div><!-- //.contents -->
<?php get_footer(); ?>
