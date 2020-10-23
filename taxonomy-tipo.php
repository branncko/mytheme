<!-- Adiciona o cabeçalho (header.php) -->
<?php get_header(); ?>
<div class="bg-gray">


    <div class="container">
        <div class="row py-4">
            <div class="col">
                <div class="ronded card">

                    <?php
						// Get all the categories
						$categories = get_terms( 'tipo' );

						// Loop through all the returned terms
						foreach ( $categories as $category ):

							// set up a new query for each category, pulling in related posts.
							$services = new WP_Query(
								array(
									'post_type' => 'downloads',
									'showposts' => -1,
									'tax_query' => array(
										array(
											'taxonomy'  => 'tipo',
											'terms'     => array( $category->slug ),
											'field'     => 'slug'
										)
									)
								)
							);
						?>

                    <ul class="alert">
                        <h3><?php echo $category->name; ?></h3>

                        <?php while ($services->have_posts()) : $services->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php endwhile; ?>


                        <?php
							// Reset things, for good measure
							$services = null;
							wp_reset_postdata();

						// end the loop
						endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Adiciona o rodapé (footer.php) -->
<?php get_footer(); ?>