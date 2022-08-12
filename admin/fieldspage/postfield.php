<?php

//fields home
function cmb2_field_home(){

    $cmb2_salario = new_cmb2_box([
        'id' => 'salario',
        'title' => 'Salário',
        'object_types' => 'post',
        'closed' => false
    ]);
    $cmb2_salario->add_field([
        'name' => 'Salário',
        'id' => 'salario',
        'type' => 'text',
    ]);
    $cmb2_salario->add_field([
        'name' => 'Benefícios',
        'id' => 'beneficios',
        'type' => 'text'
    ]);


    $cmb2_info_vaga = new_cmb2_box([
        'id' => 'info_vaga',
        'title' => 'Informações da Vaga',
        'object_types' => 'post',
    ]);
    $cmb2_info_vaga->add_field([
        'name' => 'Função',
        'id' => 'funcao_vaga',
        'type' => 'text'
    ]);
    $cmb2_info_vaga->add_field([
        'id' => 'local_vaga',
        'name' => 'Local',
        'type' => 'text'
    ]);
    $cmb2_info_vaga->add_field([
        'id' => 'tarefas_vaga',
        'name' => 'Tarefas',
        'type' => 'text'
    ]);
    $cmb2_info_vaga->add_field([
        'id' => 'requisitos_vaga',
        'name' => 'Requisitos',
        'type' => 'text'
    ]);
    $cmb2_info_vaga->add_field([
        'id' => 'nome_empresa',
        'name' => 'Nome da empresa',
        'type' => 'text'
    ]);


    $cmb2_contato = new_cmb2_box([
        'id' => 'contato',
        'title' => 'Contato',
        'object_types' => 'post'
    ]);
    $cmb2_contato->add_field([
        'id' => 'email_contato',
        'name' => 'Email para receber o currículo',
        'type' => 'text_email'
    ]);
    
    $cmb2_link_vaga = new_cmb2_box([
        'id' => 'link_vaga',
        'title' => 'Link Externo',
        'object_types' => 'post'
    ]);
    $cmb2_link_vaga->add_field([
        'id' => 'link_externo_vaga',
        'name' => 'Link Externo da Vaga',
        'desc' => 'Coloque aqui o link para a vaga, <strong>Obs: Só preencha o campo se for uma vaga externa</strong>',
        'type' => 'text_url'
    ]);
    
}
add_action('cmb2_admin_init', 'cmb2_field_home');

?>