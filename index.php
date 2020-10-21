<?php get_header(); ?>

<div class="container">

    <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

    <?php echo get_the_title();?>

    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>


</div>



<?php get_footer(); ?>