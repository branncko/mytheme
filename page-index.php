<?php /* Template name: Página Inicial */  ?>

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
                    'posts_per_page' => '-1'

                    );
                    $down_query = new WP_Query( $down_args );  ?>

        <?php if( $down_query -> have_posts() ) : 
                        while ( $down_query -> have_posts() ) : 
                        $down_query->the_post(); ?>

        <div class="col-lg-4 col-sm-6">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('mytheme-content', array('class' => 'img-fluid my-3') ); ?> </a>

           
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <div class="col-lg-4 col-sm-6">
            <h2>
                Nenhum download cadastrado!
            </h2>

        </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        


    </div>
    
</div>
<!-- caixas de Comentários  -->



<div class="bg-mt-gray py-2 mt-5">

    <div class="container">
        <div class="row">
            <div class="col col-md text-center img-fluid my-3">
                <?php  dynamic_sidebar( 'Super Banner' );  ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>