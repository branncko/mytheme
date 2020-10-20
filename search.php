<?php get_header(); ?>

<div class="container">
    <div class="row my-5 ">
        <div class="col-lg-8 col-12 col-lg-4 col-sm-6">


            <?php 
        if ( is_search() ) :
        $total_results = $wp_query->found_posts;
            echo '<p class="lead text-center">' . sprintf(__('Sua busca obteve %s resultado(s)', 'mytheme'), $total_results, get_search_query() ) . '</p>';
        endif; 
    ?>


            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <div class="alert alert-primary justify-content-center" role="alert">

                <a href="<?php the_permalink(); ?>" class="alert-link">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid my-3') ); ?>
                    <h3><?php the_title(); ?> </h3></a>

            </div>



            <?php endwhile; ?>

                    <?php else : 
                        
                        echo 
                        '<div class="row justify-content-center">
                        <div class="col-12 col-sm-8 col-md-6">
                <p class="text-center">Nada foi encontrado. Tente novamente com algo diferente.</p>';
                        echo '</div></div>';
            
                endif; ?>
            <div class="mt-3 mb-4 d-flex justify-content-between">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>

        </div>
        <?php get_sidebar();?>
    </div>
</div>

<?php get_footer(); ?>