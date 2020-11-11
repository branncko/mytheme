<?php /* Template name: Página Conteúdo */  ?>
<?php get_header(); ?>

<div class="container">

    <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

    <div class="row mt-3 bg-mt-gray">

        <div class="col-md-8 p-3">
            <h1 class="mt-5 mb-4">
                <?php the_title(); ?>
            </h1>

            <?php the_content(); ?>

        </div>




    </div>
    <?php endwhile; ?>

    <?php else : get_404_template(); endif; ?>




</div>

<?php get_footer(); ?>