<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-8 mb-5">
            <h1 class="mt-3 mb-2"><?php the_title();?></h1>
            <!-- <?php the_post_thumbnail('large', array('class' => 'img-fluid') ); ?> -->
            <p class="text-muted mt-3"><i class="far fa-clock"></i><small> Publicado em
                    <?php echo get_the_date(); ?></small> <i class="fa fa-user" aria-hidden="true"></i><small> Escrito
                    por <?php echo get_the_author(); ?></small></p>
            <?php the_content(); ?>


        </div>
    </div>

    <span class="card p-3">
        <?php get_search_form(); ?>
    </span>

    <div class="col-md-6 col-sm-12 mt-3 mt-md-0">
        <div class="row">
            <h2>Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>

            <h2>Archives by Subject:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
        </div>


    </div>


</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>