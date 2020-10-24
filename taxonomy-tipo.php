<?php get_header(); ?>
<div class="container">
    <div class="row p-4 mt-1">

        <div class="col card alert-secondary mb-3">
            <h1>Teste na taxomys</h1>
            <div class="tags">
                <ul>

                    <?php
                        // Get all the categories
                        $categories = get_terms( 'tipo' );
                        foreach ( $categories as $category ):
                            $services = new WP_Query(
                                array(
                                    'post_type' => 'downloads',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy'  => 'tipo',
                                            'terms'     => array( $category->name ),
                                            'field'     => 'slug'
                                        )
                                    )
                                )
                            );
                        ?>

                    <h3><?php echo $category->name; ?></h3>
                    <?php while ($services->have_posts()) : $services->the_post(); ?>








                    <h2 class="pl-5 my-2"> <i class="fa fa-folder-open"></i> <?php the_title(); ?> </h2>


                    <h1 class="mt-5 mb-4">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h1>





                    <?php endwhile; ?>




                    <?php
    // Reset things, for good measure
    $services = null;
    wp_reset_postdata();

// end the loop
endforeach;
?>


                    <div class="mt-3 mb-4">
                        <?php next_posts_link('Mais antigos'); ?>
                        <?php previous_posts_link('Mais novos'); ?>
                    </div>

            </div>

            <?php get_sidebar();?>
        </div>


    </div>



    <?php get_footer(  );?>