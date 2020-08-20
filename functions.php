<?php
// Funções Iniciais
function lc_theme_support(){

    //Titulo de Site
    add_theme_support('title-tag');
    
    //Logotipo personalizado
    add_theme_support('custom-logo');

    //Suporte para nav bar walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
}
add_action('after_setup_theme' , 'lc_theme_support'); 

if (!function_exists('wp_render_title_tag'))    {
    
    function lc_render_title()  {
        ?> <title> <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>  </title> <?php
    }
    add_action('wp_head', 'lc_render_title');
}

register_nav_menus(array(
    'topo'      => __('Menu no topo', 'mytheme'),
    'rodape'    => __('Menu no rodapé', 'mytheme')
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280, 720, true);
