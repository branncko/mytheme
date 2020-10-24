<?php
add_action( 'init', 'eventos_type' );
function eventos_type() {
	register_post_type( 'eventos',
		array(
			'labels' => array(
				'name' 				=> 'Eventos',
				'singular_name' 	=> 'Evento',
				'menu_name'         => 'Eventos',
				'all_items'         => 'Todos os eventos',
				'view_item'         => 'Ver evento',
				'add_new_item'      => 'Adicionar novo evento',
				'add_new'           => 'Adicionar evento',
				'edit_item'         => 'Alterar evento',
				'update_item'       => 'Atualizar evento',
				'search_items'      => 'Pesquisar evento',
				'not_found'         => 'Nenhum evento Encontrado',
				'not_found_in_trash'=> 'Nenhum evento Encontrado na Lixeira',
			),
		'hierarchical' 		  => true,
		'has_archive' 		  => true,
		'public' 			  => true,
		'exclude_from_search' => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
		'menu_icon' 		  => 'dashicons-calendar-alt',
    	'menu_position' => 5,
		'supports'            => array( 'title', 'page-attributes'),
		'rewrite'             => array( 'slug' => 'eventos'),
    	)
	);

    /**
         * Modalidade para os eventos
    **/     
    register_taxonomy( 'modalidade', array( 'eventos' ), array(
        'hierarchical' => true,
        'label' => __( 'Modalidade' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Modalidade', 'taxonomy general name' ),
        'singular_name' => _x( 'Modalidade', 'taxonomy singular name' ),
        'search_items' =>  __( 'Pesquisar Modalidade' ),
        'all_items' => __( 'Todas Modalidades' ),
        'parent_item' => __( 'Categoria Modalidade' ),
        'parent_item_colon' => __( 'Categoria Modalidade:' ),
        'edit_item' => __( 'Editar Modalidade' ),
        'update_item' => __( 'Atualizar Modalidade' ),
        'add_new_item' => __( 'Adicionar Modalidade' ),
        'new_item_name' => __( 'Nome Nova Modalidade' ),
        'menu_name' => __( 'Modalidades' ),
        ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'modalidade',
            'with_front' => true
        ),
    )
    );

    /**
         * Tipo de evento
    **/     
    register_taxonomy( 'tipo', array( 'eventos' ), array(
        'hierarchical' => true,
        'label' => __( 'Tipo de Evento' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Tipo de evento', 'taxonomy general name' ),
        'singular_name' => _x( 'Tipo de evento', 'taxonomy singular name' ),
        'search_items' =>  __( 'Pesquisar Tipo de evento' ),
        'all_items' => __( 'Todas Tipo de eventos' ),
        'parent_item' => __( 'Categoria Tipo de evento' ),
        'parent_item_colon' => __( 'Categoria Tipo de evento:' ),
        'edit_item' => __( 'Editar Tipo de evento' ),
        'update_item' => __( 'Atualizar Tipo de evento' ),
        'add_new_item' => __( 'Adicionar Tipo de evento' ),
        'new_item_name' => __( 'Nome Nova Tipo de evento' ),
        'menu_name' => __( 'Tipo de eventos' ),
        ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'tipo-de-evento',
            'with_front' => true
        ),
    )
    );

    /**
         * Posicionamento para os eventos
    **/     
    register_taxonomy( 'posicionamento', array( 'eventos' ), array(
        'hierarchical' => true,
        'label' => __( 'Posicionamento' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Posicionamento', 'taxonomy general name' ),
        'singular_name' => _x( 'Posicionamento', 'taxonomy singular name' ),
        'search_items' =>  __( 'Pesquisar Posicionamento' ),
        'all_items' => __( 'Todas Posicionamentos' ),
        'parent_item' => __( 'Categoria Posicionamento' ),
        'parent_item_colon' => __( 'Categoria Posicionamento:' ),
        'edit_item' => __( 'Editar Posicionamento' ),
        'update_item' => __( 'Atualizar Posicionamento' ),
        'add_new_item' => __( 'Adicionar Posicionamento' ),
        'new_item_name' => __( 'Nome Nova Posicionamento' ),
        'menu_name' => __( 'Posicionamentos' ),
        ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'posicionamento',
            'with_front' => true
        ),
    )
    );

    /**
         * Público-Alvo para os eventos
    **/     
    register_taxonomy( 'publico', array( 'eventos' ), array(
        'hierarchical' => true,
        'label' => __( 'Público-Alvo' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Público-Alvo', 'taxonomy general name' ),
        'singular_name' => _x( 'Público-Alvo', 'taxonomy singular name' ),
        'search_items' =>  __( 'Pesquisar Público-Alvo' ),
        'all_items' => __( 'Todas os Público-Alvos' ),
        'parent_item' => __( 'Categoria Público-Alvo' ),
        'parent_item_colon' => __( 'Categoria Público-Alvo:' ),
        'edit_item' => __( 'Editar Público-Alvo' ),
        'update_item' => __( 'Atualizar Público-Alvo' ),
        'add_new_item' => __( 'Adicionar Público-Alvo' ),
        'new_item_name' => __( 'Nome Nova Público-Alvo' ),
        'menu_name' => __( 'Público-Alvo' ),
        ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'publico-alvo',
            'with_front' => true
        ),
    )
    );

    flush_rewrite_rules();
}
?>