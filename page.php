<?php /* Template name: Página Conteúdo */  ?>
<?php get_header(); ?>

<div class="container">
    <div class="row p-4 mt-1">
        <div class="col card alert-secondary mb-3 px-3">

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>




            <h1 class="mt-5 mb-4">
                <?php the_title(); ?>
            </h1>

            <?php the_content(); ?>

            <?php endwhile; ?>

            <?php else : get_404_template(); endif; ?>

            <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>



        </div>

        <?php get_sidebar();?>


    </div>





</div>

<?php get_footer(); ?>