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
    
    
}
add_action('cmb2_admin_init', 'cmb2_field_home');

?>