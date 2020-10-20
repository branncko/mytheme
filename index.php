<?php get_header(); ?>

<div class="container">
<p>index.php</p>
    <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

    <?php echo 'Index.php';?>

    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>


</div>



<?php get_footer(); ?>