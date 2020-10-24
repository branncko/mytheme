<?php get_header(); ?>

<div class="container">
    <div class="row my-2 pt-2">

        <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>
        <div class="col-lg-8 col-12">
            <h2 class="mt-5 mb-4 text-danger"><?php the_title(); ?></h2>



            <?php the_content(); ?>




        </div>
        saida
        <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>


    </div>
    <?php get_sidebar();?>
</div>



<?php get_footer(); ?>