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
                <?php the_post_thumbnail('capa', array('class' => 'img-fluid my-3') ); ?> </a>

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
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        


        <div class="mt-3 mb-4">
            <?php next_posts_link('Mais antigos'); ?>
            <?php previous_posts_link('Mais novos'); ?>
        </div>


    </div>
    <div class="row">

        <div class="col-lg-8 col-12">
            <h5 class="border-bottom  pb-2 mb-4"><i class="fas fa-newspaper"></i> Novidades</h5>

            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h3 class="lead">Aqui teve alteração the_post</h3>

            <!-- <?php get_template_part('content', get_post_format());?> -->

            <?php endwhile; ?>
            <?php else : ?>
            <p class="lead">Nenhuma publicação encontrada! index</p>

            <?php endif; ?>

            <?php wp_reset_query(); ?>

            <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>
            <?php include('includes\teste.php'); ?>
            <?php include('includes\depoimentos.php'); ?>


        </div>
        <!-- Sidebar 2 -->
        

        

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