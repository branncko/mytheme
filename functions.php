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

function lc_cpt() {
    // Informar os textos da interface
    $labels = array (
        'name'                  => _x('Depoimentos' , 'Depoimentos dos clientes', 'mytheme'),
        'singular_name'         => _x('Depoimento', 'Depoimento do cliente', 'nytheme'),
        'menu_name'             => __('Depoimentos', 'mytheme'),
        'all_items'             => __('Todos os depoimentos', 'mytheme'),
        'view_item'             => __('Ver depoimento', 'mytheme'),
        'add_new_item'          => __('Adicionar novo depoimento', 'mytheme'),
        'add_new'               => __('Adicionar novo','mytheme'),
        'edit_item'             => __('Editar depoimento', 'mytheme'),
        'update_item'           => __('Atualizar depoimento', 'mytheme'),
        'search_items'          => __('Buscar depoimento', 'mytheme'),
        'not_found'             => __('Não encontrado', 'mytheme'),
        'not_found_in_trash'    => __('Não encontrado no lixo', 'mytheme'),
    );

    $args = array (
        'label'               => __('depoimentos','mytheme'),
        'description'         => __('Depoimentos dos clientes','mytheme'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor'),
        'hierachical'         => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicy_queryable'   => true,
        'capability_type'     => 'post'  

    );

    register_post_type('depoimentos', $args);
} 

add_action('init', 'lc_cpt', 0);