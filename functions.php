<?php
// Funções Iniciais
function lc_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme' , 'lc_theme_support'); 

if (!function_exists('wp_render_title_tag'))    {
    
    function lc_render_title()  {
        ?> <title> <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>  </title> <?php
    }
    add_action('wp_head', 'lc_render_title');
}