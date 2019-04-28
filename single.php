<?php get_header(); ?>


    <div class="mainpost">
    <?php if ( have_posts() ) :  the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

        <?php endif; //ends the loop ?>
    </div>


<?php get_footer(); ?>