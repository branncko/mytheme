<?php get_header(); ?>

<div class="container">

    <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

    <h3 class="lead">Loop cpt Downloads</h3>

   <?php get_template_part('loop', get_post_format());?> 

    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>


</div>

<?php get_footer(); ?>