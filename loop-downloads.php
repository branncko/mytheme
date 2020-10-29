                          <div class="container">
                              <div class="row">

                                  <div class="col-sm  mb-2">
                                      <?php while ( have_posts() ) : the_post();?>

                                      <a href="<?php the_permalink(); ?>">
                                          <?php the_post_thumbnail('medium', array('class' => 'img-fluid  p-2 justify-content-center') ); ?>
                                      </a>


                                      <?php endwhile ;?>

                                  </div>



                              </div>


                              <div class="mt-3 mb-4">
                                  <?php next_posts_link('Mais antigos'); ?>
                                  <?php previous_posts_link('Mais novos'); ?>
                              </div>

                          </div>