<?php
// Funções Iniciais
function mt_theme_support(){

    //Titulo de Site
    add_theme_support('title-tag');
    
    //Logotipo personalizado
    add_theme_support('custom-logo');

    //Suporte para nav bar walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
}
add_action('after_setup_theme' , 'mt_theme_support'); 

if (!function_exists('wp_render_title_tag'))    {
    
    function mt_render_title()  {
        ?> <title> <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>  </title> <?php
    }
    add_action('wp_head', 'mt_render_title');
}
// Cria os menus
register_nav_menus(array(
    'topo'      => __('Menu no topo', 'mytheme'),
    'rodape'    => __('Menu no rodapé', 'mytheme')
));
// Miniaturas
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1000, 1000, false); 


if (!function_exists('mytheme_image_sizes')) {
	function mytheme_image_sizes() {
		add_image_size('large_1080', 1080, 1080, false);
		add_image_size('medium-400', 400, 400, false);
		// add_image_size('mytheme-large', 678, 509, true);
		// add_image_size('mytheme-medium', 326, 245, true);
		// add_image_size('mytheme-small', 800, 600, true);
	}
}
add_action('after_setup_theme', 'mytheme_image_sizes');



// Definir resumo
add_filter( 'excerpt_length', function($length) {
    return 15;
}); 

add_filter('excerpt_more', function($more) {
    return ' ...';

});
//Definir paginação
add_filter('next_posts_link_attributes', 'posts_link_attibutes');
add_filter('previous_posts_link_attributes', 'posts_link_attibutes');

function posts_link_attibutes() {
    return 'class="btn btn-mt-orange"';
}

// Widgets e Sidebar

register_sidebar( 
    array(
        'name'          => 'Ads Topo',
        'id'            => 'ads-topo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',

));

register_sidebar( 
    array(
        'name'          => 'Super Banner',
        'id'            => 'super-banner',
        'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',

));

register_sidebar( 
    array(
        'name'          => 'Busca',
        'id'            => 'busca',
        'before_widget' => '<div class="card bg-mt-gray border-0 mb-4"><div class="card-body">',
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



include_once get_template_directory() .  "/cpt/downloads.php";
// include_once get_template_directory() .  "/cpt/eventos.php";
//include_once get_template_directory() .  "/cpt/depoimentos.php";
include_once get_template_directory() .  "/includes/cmb2/load.php";

function search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
        if ($query->is_search) {
            $query->set('post_type', array( 'post', 'downloads' ) );
        }
    }
}

add_action('pre_get_posts','search_filter');

function rtcadmin_show_cpt_archives( $query ) {
    if ( ! empty( $query->query_vars['suppress_filters'] ) ) return;
    if ( ! is_category() || ! is_tag() ) return;
    if ( ! $query->is_main_query() ) return;

    $post_types = $query->get( 'downloads' );
    $query->set( 'post_type', array_merge( $post_types, 'downloads' ) );
}

add_action( 'pre_get_posts', 'rtcadmin_show_cpt_archives' );