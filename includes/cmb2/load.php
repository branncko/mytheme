<?php

//funções de ajuda
function get_field($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
    echo get_field($key, $page_id);
}

// carrega os campos personalidados do CMB2
require_once get_template_directory() . '/includes/cmb2/cmb2.php';
require_once get_template_directory() . '/includes/cmb2/downloads.php';

?>