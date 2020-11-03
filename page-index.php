<?php /* Template name: Página  Mega Inicial */  ?>

<?php get_header();?>

<!-- <section id="anuncios_01">
    <div class="row text-white text-center bg-dark">
        <div class="col-md p-2 header-ad img-fluid">
            <?php  dynamic_sidebar( 'Ads Topo' );  ?>
        </div>
    </div>
</section> -->


<!-- Bloco 01 -->
<section class="card img-fluid border-0 text-white ">

    <div class="container-fluid">
        <div class="row my-2 pt-2 align-items-center">
            <?php 

            $down_args = array(
            'post_type' => 'downloads', 
            'posts_per_page' => 8,
            


            );
            $down_query = new WP_Query( $down_args );  ?>

            <?php if( $down_query -> have_posts() ) : 
                while ( $down_query -> have_posts() ) : 
                $down_query->the_post(); ?>

            <div class="col-xl col-lg-3 col-md-4 col-sm-6 text-center justify-content-center">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium-400', array('class' => 'rounded img-fluid my-3 ') ); ?>
                </a>

            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <div class="col-lg-4 col-sm-6">
                <h5>
                    Nenhum download cadastrado!
                </h5>

                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>


</section>



<!-- Banner do Centro -->

<div class="card img-fluid border-0 text-white text-center">

    <div class="container-fluid mt-3 clearfix">
        <div class="row bg-mt-orange-light">

            <div class="col header-ad center p-2">
                <?php  dynamic_sidebar( 'Ads Topo' );  ?>
            </div>


        </div>
    </div>





    <div class="container">

        <div class="row my-2 pt-2 align-items-center">

            <!-- Bloco 02 -->

            <?php 

                    $down_args = array(
                    'post_type' => 'downloads', 
                    'posts_per_page' => 8,
                    'offset' => 9


                    );
                    $down_query = new WP_Query( $down_args );  ?>

            <?php if( $down_query -> have_posts() ) : 
                        while ( $down_query -> have_posts() ) : 
                        $down_query->the_post(); ?>

            <div class="col-lg-3 col-sm-6 ">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium-400', array('class' => 'img-thumbnail my-3 justify-content-center') ); ?>
                </a>

            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <div class="col-lg-3 col-sm-6">
                <h5>
                    Nenhum download cadastrado!
                </h5>

            </div>

            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>

    </div>




</div>

<?php get_footer(); ?>