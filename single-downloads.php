<?php get_header(); ?>

<div class="container">
    <div class="container-fluid mt-3 clearfix">
        <div class="row bg-gray">

            <div class="col header-ad center p-2">
                <?php  dynamic_sidebar( 'Ads Topo' );  ?>
            </div>

        </div>
    </div>
    <div class="row my-3 pt-2">

        <div class="col-lg-8 col-12">

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <!-- <h2 class="mt-3 mb-4"><?php the_title(); ?></h2> -->

            <?php the_post_thumbnail('large-1080', array('class' => 'rounded card bg-imgfree center img-fluid p-3 mb-3') ); ?>

            <!-- <img src="<?php the_field('cmb2_down_imagem');?>" alt="imagem demonstrativa"
                class="rounded img-fluid mb-3 p-2 card alert-primary"> -->


            <!-- <img src="<?php wp_get_attachment_image ( the_field('cmb2_down_imagem'), 'mytheme-content' ); ?>" alt="Aqui" class="rounded mb-3 p-2 card alert-primary"> -->

            Essa imagem foi publicada por <?php  the_author(); ?> em <?php the_date('d/m/Y \a\s\ H:i:s'); ?> e faz parte
            dos grupos: <?php  the_terms($post->ID , 'downloads_tipo', '', ' | ' ); ?>

        </div>

        <div class="col-lg-4 col-12">

            <div class="well hidden-xs">

                <p>

                    <?php 

$download = get_field('cmb2_down_link');
?>

                    <a class="btn btn-outline-primary btn-lg mb-3 mt-3" href="<?php 
                        if (empty($download)){
                            the_field('cmb2_down_imagem');
                        }
                        
                        if (isset($download)) {  
                            the_field('cmb2_down_link');} ?>" target="_blank"><i class="fa fa-download"></i>
                        <?php  the_title(); ?>
                    </a>
                </p>


                <h4 class="pl-1 ">Detalhes</h4>

                <span class="p-2 card"> <?php the_excerpt();?></span>

                <!-- <?php the_category('  |  '); ?> -->

                <i class="fa fa-folder-open"></i> <?php  the_terms($post->ID , 'downloads_tipo', '', ' | ' ); ?> <br>

                <i class="fa fa-eye" aria-hidden="true"></i>
                <i class="fa fa-clock-o"></i> Publicado em
                <?php the_date('d/m/Y \|\ H:i:s'); ?> <br>
                <i class="fas fa-edit" aria-hidden="true"></i> Alterado em
                <?php the_modified_date('d/m/Y \|\ H:i:s'); ?><br>
            </div>
            <!-- <h4 class="mt-5">Publicidade</h4> -->
            <?php  dynamic_sidebar( 'Cards' );  ?>



            <!-- cmb2_down_imagem -->


            <?php endwhile; ?>

            <?php else : echo 'Nenhum arquivo'; endif; ?>



        </div>

    </div>
</div>


<?php get_footer(); ?>