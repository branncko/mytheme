<?php /* Template name: Página  Mega Inicial */  ?>

<?php get_header();?>

<div class="card border-0 text-white text-center">
    <img src="<?php the_field('cmb2_banner_imagem'); ?>" class="card-img banner-header" alt="imagem Banner ">
    <div class="card-img-overlay bg-banner-header p-0 m-0 row">
        <div class="col align-self-end">
            <p class="mb-0 lead"><?php the_field('cmb2_banner_subtitulo'); ?></p>
            <h1 class="mb-3"><?php the_field('cmb2_banner_titulo'); ?></h1>
            <p><a href="<?php the_field('cmb2_banner_link'); ?>" class="btn btn-lg btn-lc-orange mb-3">Saiba mais</a>
            </p>
        </div>
    </div>

</div>

<div class="container">
    <div class="row my-5 pt-2">
        <?php 

                    $down_args = array(
                    'post_type' => 'downloads', 
                    'posts_per_page' => '9'

                    );
                    $down_query = new WP_Query( $down_args );  ?>

        <?php if( $down_query -> have_posts() ) : 
                        while ( $down_query -> have_posts() ) : 
                        $down_query->the_post(); ?>

        <div class="col-lg-4 col-sm-6 ">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('mytheme-content', array('class' => 'img-fluid my-3 justify-content-center') ); ?> </a>

            <!-- <h5>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                    </h5>
                    <p class="mb-0"><?php the_excerpt(); ?> </p> -->
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <div class="col-lg-4 col-sm-6">
            <h5>
                Nenhum download cadastrado!
            </h5>

        </div>
        




        <div class="mt-3 mb-4">
            <?php next_posts_link('Mais antigos'); ?>
            <?php previous_posts_link('Mais novos'); ?>
        </div>
            <?php endif; ?>
        <?php wp_reset_query(); ?>

    </div>
    
</div>
<!-- caixas de Comentários  -->





<?php get_footer(); ?>