<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">


            <?php 
        if ( is_search() ) :
        $total_results = $wp_query->found_posts;
            echo '<p class="lead mt-5 text-center">' . sprintf(__('Sua busca obteve %s resultado(s)', 'MyTheme'), $total_results, get_search_query() ) . '</p>';
        endif; 
    ?>


            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format());?>

            <?php endwhile; ?>

            <?php else : 
                
                echo 
                '<div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-6">
        <p class="text-center">Nada foi encontrado. Tente novamente com algo diferente  .</p>';
        get_search_form();
                echo '</div></div>';
    
        endif; 
    ?>
            <div class="mt-3 mb-4 d-flex justify-content-between">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>