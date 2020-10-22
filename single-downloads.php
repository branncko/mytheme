<?php get_header(); ?>

<div class="container">
    <div class="row my-2 pt-2">
        <div class="col-lg-8 col-12">

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <h1 class="mt-3 mb-4"><?php the_title(); ?></h1>

            <!-- <?php the_post_thumbnail('mytheme-content', array('class' => 'center img-fluid mb-3') ); ?> -->

            <img src="<?php the_field('cmb2_down_imagem');?>" alt="imagem demonstrativa"
                class="rounded img-fluid mb-3 p-2 card alert-primary">

            



            <div class="well hidden-xs">

            
                <h4 class="pl-1 ">Detalhes</h4>
                
                <span class="p-2 card"> <?php the_excerpt();?></span>
                
                

                <i class="fa fa-folder-open"></i> <?php the_category('  |  '); ?><br>
                <!-- <i class="fa fa-comments" aria-hidden="true"></i>
                <?php comments_number( 'Nenhum comentário', '01 comentário', '% comentários' ); ?><br> -->
                <i class="fa fa-eye" aria-hidden="true"></i>

                <i class="fa fa-clock-o"></i> Publicado em
                <?php the_date('d/m/Y \|\ H:i:s'); ?> <br>
                <i class="fas fa-edit" aria-hidden="true"></i> Alterado em
                <?php the_modified_date('d/m/Y \|\ H:i:s'); ?><br>
            </div>

            <p><a href="<?php the_field('cmb2_down_link'); ?>" target="_blank"
                    class="btn btn-outline-primary btn-lg mb-3 mt-3">Baixar</a>
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