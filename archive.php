<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container-fluid">
    <div class="row p-4 mt-1">
        <div class="col card alert-secondary mb-3">

            <?php the_post(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            
            <h2>Publicações por Mês:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>

            <h2>Publicações por Assunto:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>

        </div>
        <?php get_sidebar(); ?>

    </div><!-- #content -->
</div><!-- #container -->


<?php get_footer(); ?>