<?php get_header(); ?>


    <?php 
        $posts = get_posts(['post_type'=>'post','showposts'=>2]);
        if($posts): foreach( $posts as $post) : setup_postdata( $post );
    ?>
        <div class="frontpost">

                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>">Leia mais...</a>
        </div>
    <?php endforeach; endif; ?>

<?php get_footer(); ?>