                          <div class="container-fluid">


                              <div class="row">

                                  <div class="col header-ad center p-2">
                                      <?php  dynamic_sidebar( 'Ads Topo' );  ?>
                                  </div>


                                  <?php while ( have_posts() ) : the_post();?>
                                  <div
                                      class="col-xl col-lg-2 col-md-4 col-sm-6  mb-1 rounded card text-center justify-content-center">

                                      <a href="<?php the_permalink(); ?>">
                                          <?php the_post_thumbnail('medium-400', array('class' => 'img-fluid  p-2 ') ); ?>
                                      </a>
                                  </div>


                                  <?php endwhile ;?>





                              </div>


                              <div class="mt-3 mb-4">
                                  <?php next_posts_link('Mais antigos'); ?>
                                  <?php previous_posts_link('Mais novos'); ?>
                              </div>

                          </div>