<?php get_header(); ?>

<div class="container">
    <div class="row my-2 pt-2">
        <div class="col-lg-8 col-12">

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <h1 class="mt-3 mb-2"><?php the_title(); ?></h1>

            <!-- <?php the_post_thumbnail('full', array('class' => 'center img-fluid mb-3') ); ?> -->

            <img src="<?php the_field('cmb2_down_imagem');?>" alt="iamgem" class="img-fluid mb-3">

            <p class="card text-muted mt-3"><?php the_excerpt();?></p>
            
            <p class="text-muted mt-3">Arquivo adicionado em <?php the_date();?></p>

            <p><a href="<?php the_field('cmb2_down_link'); ?>" class="btn btn-lg btn-lc-orange mb-3">Baixar</a>
            </p>

            <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>

            <!-- cmb2_down_imagem -->


            <?php endwhile; ?>

            <?php else : echo 'Nenhum arquivo'; endif; ?>






        </div>
        <?php get_sidebar();?>

    </div>



</div>

<?php get_footer(); ?>