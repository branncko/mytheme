<?php
add_action ( 'cmb2_admin_init' , 'cmb2_fields_downloads' );
function cmb2_fields_downloads() {
    $cmb = new_cmb2_box([
        'id' => 'down_box',
        'title' => 'Informações',
        'object_types' => 'downloads',
       
    ]);

    $cmb->add_field( array(
        'name'    => 'Imagem',
        'desc'    => 'Enviar uma imagem ou escrever uma URL.',
        'id'      => 'cmb2_down_imagem',
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
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ) );

    $cmb->add_field([
        'name' => 'Link de destino',
        'id' => 'cmb2_down_link',
        'type' => 'text_url',
        'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ),

    ]);


}