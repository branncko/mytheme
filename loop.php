div class="container">
    <div class="row my-5 pt-2">
        

        <?php if( have_posts() ) : 
                        while (have_posts() ) : 
                        the_post(); ?>

        <div class="col-lg-4 col-sm-6 ">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('mytheme-paisagem', array('class' => 'img-fluid my-3 justify-content-center') ); ?> </a>

             <h5> -->
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                    </h5>
                    <p class="mb-0"><?php the_excerpt(); ?> </p> 
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
    

    </div>
    
</div>