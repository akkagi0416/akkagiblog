<div id="sub">
    <div class="relation">
       <h2>関連記事</h2>
<?php
    $original_post = $post;
    $categories = get_the_category( $post->ID );
    $category_ID = array();
    foreach( $categories as $category ){
        array_push( $category_ID, $category->cat_ID );
    }
    $args = array(
        'post__not_in' => array( $post->ID ),
        'posts_per_page' => 4,
        'category__in' => $category_ID,
        'orderby' => 'rand'
    );
    $my_query = new WP_Query( $args );
    if( $my_query->have_posts() ):
?>
       <ul>
<?php
        while( $my_query->have_posts() ) : $my_query->the_post();
?>
            <li>
                <a href="<?php the_permalink(); ?>">
<?php
            if( has_post_thumbnail() ) :
?>
                    <?php the_post_thumbnail(); ?>
<?php
            else :
?>
                    <img src="http://lorempixel.com/150/150/transport" alt="">
<?php
            endif;
?>

                <h3><?php the_title(); ?></h3>
                </a>
            </li>
<?php
        endwhile;
        wp_reset_query(); 
?>
       </ul>
<?php
    endif;
?>
    </div><!-- //.relation -->
</div><!-- //#sub -->
