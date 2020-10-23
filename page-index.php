<?php /* Template name: Página  Mega Inicial */  ?>

<?php get_header();?>

<div class="card img-fluid border-0 text-white text-center bg-dark">



    <div class="center p-2">
        <?php  dynamic_sidebar( 'Ads Topo' );  ?>
    </div>


</div>
<!-- Bloco 01 -->
<div class="card img-fluid border-0 text-white text-center">
    <div class="container">
        <div class="row my-2 pt-2">
            <?php 

            $down_args = array(
            'post_type' => 'downloads', 
            'posts_per_page' => 4,
            


            );
            $down_query = new WP_Query( $down_args );  ?>

            <?php if( $down_query -> have_posts() ) : 
                while ( $down_query -> have_posts() ) : 
                $down_query->the_post(); ?>

            <div class="col-lg-3 col-sm-6 ">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', array('class' => 'rounded img-fluid my-3 justify-content-center') ); ?>
                </a>

            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <div class="col-lg-4 col-sm-6">
                <h5>
                    Nenhum download cadastrado!
                </h5>





                <!-- <div class="mt-3 mb-4">
            <?php next_posts_link('Mais antigos'); ?>
            <?php previous_posts_link('Mais novos'); ?>
                </div> -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>


</div>




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

        <div class="row my-2 pt-2">

            <!-- Bloco 02 -->

            <?php 

                    $down_args = array(
                    'post_type' => 'downloads', 
                    'posts_per_page' => 8,
                    'offset' => 5


                    );
                    $down_query = new WP_Query( $down_args );  ?>

            <?php if( $down_query -> have_posts() ) : 
                        while ( $down_query -> have_posts() ) : 
                        $down_query->the_post(); ?>

            <div class="col-lg-3 col-sm-6 ">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', array('class' => 'img-thumbnail my-3 justify-content-center') ); ?>
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