<?php
add_action('init', 'mt_cpt');

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



/**
         * Modalidade para os eventos
    **/     
    register_taxonomy( 'tipo', array( 'downloads' ), array(
        'hierarchical' => true,
        'label' => __( 'Tipo' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Tipo', 'taxonomy general name' ),
        'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
        'search_items' =>  __( 'Pesquisar Tipo' ),
        'all_items' => __( 'Todos Tipos' ),
        'parent_item' => __( 'Categoria Tipo' ),
        'parent_item_colon' => __( 'Categoria Tipo:' ),
        'edit_item' => __( 'Editar Tipo' ),
        'update_item' => __( 'Atualizar Tipo' ),
        'add_new_item' => __( 'Adicionar Tipo' ),
        'new_item_name' => __( 'Nome Nova Tipo' ),
        'menu_name' => __( 'Tipos' ),
        ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'tipo',
            'with_front' => true
        ),
    )
    );

register_post_type('downloads', $args);
    flush_rewrite_rules();
	
}?>