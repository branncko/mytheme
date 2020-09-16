<?php
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
?>