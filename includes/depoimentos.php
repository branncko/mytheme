<?php 

                    $args = array('post_type' => 'depoimentos', 
                    'posts_per_page' => 2
                    );
                    $the_query = new WP_Query( $args );
                ?>

            <?php if( $the_query -> have_posts() ) : 
                while ( $the_query-> have_posts() ) : 
                $the_query->the_post(); ?>

            <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="card border-card-footer">
                    <div class="card-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <div class="col-12">
                <p class="lead">
                    Nenhum Depoimento
                </p>
            </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>