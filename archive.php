<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Accesspress Mag Pro
 */

get_header(); ?>
<div class="bg-light">

    <div class="container">
        <div class="justify-content-center">

            <?php if ( have_posts() ) :       ?>

            <div class="py-3 alert alert-primary">
                <?php 
                    the_archive_title( '<h1 class="page-title"><span>', '</span></h1>' ); 
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </div><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class="row my-5 pt-2">
                    <div class="col-lg-4 col-sm-6">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('mytheme-retrato', array('class' => 'img-fluid my-3 justify-content-center') ); ?>
                        </a>

                        <h5>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                        </h5>
                        <p class="mb-0"><?php the_excerpt(); ?> </p>
                    </div>
                </div>
            
            </div>
            

            <?php endwhile; wp_reset_query(); ?>



            <?php else : ?>
            parte do loop


            <?php endif; ?>

        </div><!-- #main -->
    </div><!-- #primary -->


</div><!-- .apmag-container -->
<?php get_footer(); ?>