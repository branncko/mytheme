<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container-fluid">
    <div class="row p-4 mt-1">
        <div class="col card alert-secondary mb-3">

            <?php the_post(); ?>
            <h1 class="entry-title my-3">Publicações</h1>

            
            <h2>Por Mês:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>

            <h2>Por Assunto:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
            
            <ul>
                <?php single_cat_title(); ?>
            </ul>
            

        </div>
        <?php get_sidebar(); ?>

    </div><!-- #content -->
</div><!-- #container -->


<?php get_footer(); ?>