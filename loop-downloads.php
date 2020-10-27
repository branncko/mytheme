<div class="container">
    <div class="row">


        <?php 

                            while ( have_posts() ) : the_post();?>

        <div class="col-lg-3 col-sm-6 mb-2">

            <div class="card">

                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumb', array('class' => 'card-img-top img-fluid  p-2 justify-content-center') ); ?>
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>

                </div>

            </div>












        </div>

        <?php endwhile ;?>







        <div class="mt-3 mb-4">
            <?php next_posts_link('Mais antigos'); ?>
            <?php previous_posts_link('Mais novos'); ?>
        </div>


    </div>
</div>