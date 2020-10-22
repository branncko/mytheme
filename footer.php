 <!-- Rodapé -->
 <div class="bg-mt-dark py-5 ">
     <div class="container">
         <div class="row">
             <div class="col text-center text-white">

                 <div class="row justify-content-center">
                     <div class="col-xl-3 col-lg-4 col-md-6 col-8 text-center">

                         <?php 

                    $lc_custom_logo = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($lc_custom_logo , 'full');

                    if(has_custom_logo()) {
                      echo '<img src="' . esc_url($logo[0]) . '" class="img-fluid my-3" alt="Logotipo IMGfree">';
                    }
                    else {
                      echo '<h1 class="m-0">' . get_bloginfo('name') . '</h1>';
                      echo '<p class="m-0">' . get_bloginfo('description') . '</p>';  
                    }
                                      
                  ?>

                     </div>

                 </div>

                 <div class="row">



                     <?php
            wp_nav_menu( array(
                'theme_location'    => 'rodape',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'col-12 mb-5',
                'menu_class'        => 'nav justify-content-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>

                 </div>

             </div>
         </div>
         <div class="row">
             <div class="col text-center text-white">
                      <ul class="list-inline mb-0">


                        <li class="list-inline-item mr-3">
                            <i class="fab fa-whatsapp "></i>
                            (88) 9 9956-7891
                        </li>

                     <li class="list-inline-item mr-3">
                         <i class="fas fa-inbox"></i>
                         contato@brancosousa.com.br
                     </li>

                 </ul>
             </div>



         </div>

     </div>
 </div>
 <?php wp_footer(); ?>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
 </body>

 </html>