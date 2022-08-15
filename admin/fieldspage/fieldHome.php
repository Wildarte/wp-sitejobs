<?php

//fields home
function cmb2_fields_header(){

    $cmb2_home = new_cmb2_box([
        'id' => 'home',
        'title' => 'Cabeçalho',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $cmb2_home->add_field([
        'name' => 'Título',
        'id' => 'title_home',
        'type' => 'text',
    ]);
    $cmb2_home->add_field([
        'name'    => 'Imagem do cabeçalho',
        'desc'    => 'Adicionar imagem',
        'id'      => 'img_header',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            //'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png',
            ),
        ),
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ]);

}
add_action('cmb2_admin_init', 'cmb2_fields_header');

?>