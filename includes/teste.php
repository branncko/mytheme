<div class="card">
    <ul class="list-group list-group-flush">

        <?php 

                        $page_args = array(
                        'post_type' => 'page', 
                        // 'post_parent' => '710, 22',
                        'posts_per_page' => '4'

                        );
                        $page_query = new WP_Query( $page_args );  ?>

        <?php if( $page_query -> have_posts() ) : 
                        while ( $page_query -> have_posts() ) : 
                        $page_query->the_post(); ?>

        <li class="list-group-item border-0">
            <h5>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a>
            </h5>
            <p class="mb-0"><?php the_excerpt(); ?> </p>
        </li>

        <?php endwhile; ?>
        <?php else : ?>
        <li class="list-group-item border-0">
            <h5>
                Nenhuma solução cadastrada na index!
            </h5>

        </li>
        <?php endif; ?>
        <!-- <?php wp_reset_query(); ?> -->

    </ul>
</div>