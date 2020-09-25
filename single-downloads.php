<?php get_header(); ?>

<div class="container">
    <div class="row my-2 pt-2">
        <div class="col-lg-8 col-12">

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <h1 class="mt-3 mb-2"><?php the_title(); ?></h1>

            <?php the_post_thumbnail('mytheme-content', array('class' => 'center img-fluid mb-3') ); ?>

            <!-- <img src="<?php the_field('cmb2_down_imagem');?>" alt="imagem demonstrativa" class="img-fluid mb-3 p-2 card"> -->

            <h5 class="p-3"><?php the_excerpt();?></h5>



            <div class="well hidden-xs" id="sidebar">
                <h4 class="p-1">Detalhes</h4>

                <i class="fa fa-folder-open"></i> <?php the_category(', '); ?><br>
                <!-- <i class="fa fa-comments" aria-hidden="true"></i>
                <?php comments_number( 'Nenhum comentário', '01 comentário', '% comentários' ); ?><br> -->
                <i class="fa fa-eye" aria-hidden="true"></i>

                <i class="fa fa-clock-o"></i> Publicado em
                <?php the_date('d/m/Y \|\ H:i:s'); ?> <br>
                <i class="fas fa-edit" aria-hidden="true"></i> Alterado em
                <?php the_modified_date('d/m/Y \|\ H:i:s'); ?><br>
            </div>

            <p><a href="<?php the_field('cmb2_down_link'); ?>" target="_blank"
                    class="btn btn-lg btn-lc-orange mb-3 mt-3">Baixar</a>
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

<div class="bg-mt-gray py-2 mt-5">

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <?php  dynamic_sidebar( 'Ads Topo' );  ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>