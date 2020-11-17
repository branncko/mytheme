<?php

function listar_posts_pmc() {

    $response = wp_remote_get ('https://brancosousa.com.br/wp-json/wp/v2/posts');
    if ( is_array( $response ) ) {
        $header = $response['headers'];
        $body = $response['body'];
        $data = json_decode( $body);
        
        

        if (! is_wp_error( $data)) {
            echo '<ul>';
            foreach ( $data as $rest_post) {
                echo '<li>';
                    echo '<a target="_blank" href="' . esc_url( $rest_post->link ) . '">'; echo $rest_post->title->rendered; echo '</a>';
                echo '</li>';
            }

            echo '</ul>';
        }
    }


}


?>