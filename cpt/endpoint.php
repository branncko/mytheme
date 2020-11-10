<?php 

function api_usuario_posta($request) {

    $response = array (
        'nome' => 'Branco Sousa',
        'email' => 'imprimarte@gmail.com'

    );

    return rest_ensure_response($response);

}

function resgistra_api_usuario_posta() {
    register_rest_route('image', '/imagens', array (
        array(
            'methods' => 'GET', 
            'callback' => 'api_usuario_posta'
        ),
    ));


}

add_action('rest_api_init', 'resgistra_api_usuario_posta');

?> 