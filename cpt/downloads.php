<?php
function mt_cpt() {
    // Informar os textos da interface
    $labels = array (
        'name'                  => _x('Downloads' , 'Downloads dos clientes', 'mytheme'),
        'singular_name'         => _x('Download', 'Download do cliente', 'nytheme'),
        'menu_name'             => __('Downloads', 'mytheme'),
        'all_items'             => __('Todos os arquivos disponíveis', 'mytheme'),
        'view_item'             => __('Ver download', 'mytheme'),
        'add_new_item'          => __('Adicionar novo download', 'mytheme'),
        'add_new'               => __('Adicionar novo','mytheme'),
        'edit_item'             => __('Editar download', 'mytheme'),
        'update_item'           => __('Atualizar download', 'mytheme'),
        'search_items'          => __('Buscar download', 'mytheme'),
        'not_found'             => __('Não encontrado', 'mytheme'),
        'not_found_in_trash'    => __('Não encontrado no lixo', 'mytheme'),
    );

    $args = array (
        'label'               => __('downloads','mytheme'),
        'description'         => __('Disponibilização de arquivos grátis','mytheme'),
        'labels'              => $labels,
        'supports'            => array('title',  'excerpt','thumbnail'),
        'taxonomies'    => array('category', 'tags'),
        'hierachical'         => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-admin-links',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicy_queryable'   => true,
        'capability_type'     => 'post'  

    );

    register_post_type('downloads', $args);
} 

add_action('init', 'mt_cpt', 0);

?>