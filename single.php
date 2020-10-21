<?php get_header(); ?>
<p>Single.php</p>
<div class="container">

    <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>


</div>

<?php get_footer(); ?>