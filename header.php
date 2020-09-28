<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="<?php bloginfo('template_url'); ?>/css/all.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>
    <div class="bg-mt-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-mt-gray mt-0">

                <a class="navbar-brand" href="<?php bloginfo('url'); ?>/">
                    <?php 

                $lc_custom_logo = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($lc_custom_logo , 'full');

                if(has_custom_logo()) {
                  echo '<img src="' . esc_url($logo[0]) . '" class="img-fluid" alt="Logotipo IMGfree">';
                }
                else {
                  echo '<h1 class="m-0">' . get_bloginfo('name') . '</h1>';
                  echo '<p class="m-0">' . get_bloginfo('description') . '</p>';  
                }
              
                
              ?> </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Expandir Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
        wp_nav_menu( array(
            'theme_location'    => 'topo',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarHeader',
            'menu_class'        => 'nav navbar-nav mx-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
            </nav>
        </div>





        <div class="row py-4 align-items-center justify-content-center text-white">
            <div class="col-8 col-md-4 col-lg-3 mb-4 mb-md-0">


            </div>
            <div class="col-12 col-md-8 col-lg-9 header-ad">
                <?php  dynamic_sidebar( 'Ads Topo' );  ?>
            </div>
        </div>


    </div>