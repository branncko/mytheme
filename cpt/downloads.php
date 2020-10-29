<?php
// Custom post
function registra_downloads() {
	$labels = array(
		'name'               => 'Downloads',
		'singular_name'      => 'Download',
		'menu_name'          => 'Downloads ',
		'name_admin_bar'     => 'Downloads',
		'add_new'            => 'Novo',
		'add_new_item'       => 'Novo Arquivo para baixar',
		'new_item'           => 'Novo',
		'edit_item'          => 'Editar ',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Downloads',
		'search_items'       => 'Encontrar',
		'parent_item_colon'  => 'Pais:',
		'not_found'          => 'Nada encontrado.',
		'not_found_in_trash' => 'Nada encontrado.',
	);

	$args = array(
		'menu_icon'		=> 'dashicons-media-document',
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 11,
		'rewrite' => array('slug' => 'downloads', 'with_front' => true),
		'can_export' => true,
		'taxonomies' => array('post_tag', 'downloads_tipo'),
		'publicly_queryable' => true,
		'supports' => array('title',  'excerpt','thumbnail'),
	);
	
	// Registra o custom post
	register_post_type( 'downloads', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'downloads_tipo', 
		array( 
			'downloads' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Utilização' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'downloads_tipo'),
		)
	);


	
}
add_action( 'init', 'registra_downloads' );

// Adiciona o custom posts na query principal
?>