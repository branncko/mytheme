<?php
add_action ( 'cmb2_admin_init' , 'cmb2_fields_home' );
function cmb2_fields_home() {
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Cabeçalho',
        'object_types' => ['page'],
        'show_on' => [
            'jey' => 'page-template',
            'value' => 'page-index.php'
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título',
        'id' => 'cmb2_banner_titulo',
        'type' => 'text',

    ]);

    $cmb->add_field([
        'name' => 'Sub-tíltulo',
        'id' => 'cmb2_banner_subtitulo',
        'type' => 'text',

    ]);

    $cmb->add_field( array(
        'name'    => 'Imagem',
        'desc'    => 'Enviar uma imagem ou escrever uma URL.',
        'id'      => 'cmb2_banner_imagem',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Adicionar arquivo' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => array ('application/pdf','image/gif','image/jpeg','image/png' )
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

    $cmb->add_field([
        'name' => 'Link de destino',
        'id' => 'cmb2_banner_link',
        'type' => 'text_url',
        'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ),

    ]);


}