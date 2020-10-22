<div class="container">
    <div class="row my-5 pt-2">

    <div class="row my-5 pt-2">
        <?php 

            $down_args = array(
            'post_type' => 'downloads', 
            'posts_per_page' => '-1',
            


            );
            $down_query = new WP_Query( $down_args );  ?>

        <?php if( $down_query -> have_posts() ) : 
                while ( $down_query -> have_posts() ) : 
                $down_query->the_post(); ?>

        <div class="col-lg-4 col-sm-6 ">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('mytheme-content', array('class' => 'img-fluid my-3 justify-content-center') ); ?>
            </a>

            <!-- <h5>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a>
            </h5>
            <p class="mb-0"><?php the_excerpt(); ?> </p> -->
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <div class="col-lg-4 col-sm-6">
            <h5>
                Nenhum download cadastrado!
            </h5>

        </div>





        <div class="mt-3 mb-4">
            <?php next_posts_link('Mais antigos'); ?>
            <?php previous_posts_link('Mais novos'); ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>


    </div>

</div>