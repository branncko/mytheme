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
// Cria os menus
register_nav_menus(array(
    'topo'      => __('Menu no topo', 'mytheme'),
    'rodape'    => __('Menu no rodapé', 'mytheme')
));
// Miniaturas
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1280, 720, true); 

// Definir resumo
add_filter( 'excerpt_length', function($length) {
    return 15;
}); 
//Definir paginação
add_filter('next_posts_link_attributes', 'posts_link_attibutes');
add_filter('previous_posts_link_attributes', 'posts_link_attibutes');

function posts_link_attibutes() {
    return 'class="btn btn-lc-orange"';
}

register_sidebar( 
    array(
        'name'          => 'Busca',
        'id'            => 'busca',
        'before_widget' => '<div class="card bg-lc-gray border-0 mb-4"><div class="card-body">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',

));

register_sidebar( 
    array(
        'name'          => 'Cards',
        'id'            => 'cards',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',

));