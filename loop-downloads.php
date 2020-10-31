                          <div class="container-fluid">
                              <div class="row">


                                  <?php while ( have_posts() ) : the_post();?>
                                  <div
                                      class="rounded card justify-content-center col-xl col-lg-2 col-md-4 col-sm-6  mb-1">

                                      <a href="<?php the_permalink(); ?>">
                                          <?php the_post_thumbnail('medium', array('class' => 'img-fluid  p-2 ') ); ?>
                                      </a>
                                  </div>


                                  <?php endwhile ;?>





                              </div>


                              <div class="mt-3 mb-4">
                                  <?php next_posts_link('Mais antigos'); ?>
                                  <?php previous_posts_link('Mais novos'); ?>
                              </div>

                          </div>