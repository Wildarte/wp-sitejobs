<?php
//Template Name: Home Page
get_header();
?>

    <main>

        <section class="hero">
            <div class="hero_content">
                <div class="board_search">
                    <h1>Encontre a vaga de emprego ideal perto de você</h1>
                    <form action="" class="search">
                        <label for="">
                            <i class="bi bi-files"></i>
                            <input type="search" name="" id="" placeholder="Busque por uma vaga">
                        </label>
                        
                        <button type="submit">
                            <i class="bi bi-search"></i>
                            Encontrar
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="section_jobs">
            <div class="section_jobs_content container">

                <section class="list_jobs">
                    <header class="header_list">
                        <h3>- Vagas de emprego recentes</h3>

                        <div>
                            <a href="">
                                Mais Vagas <i class="bi bi-list-ul"></i>
                            </a>
                        </div>

                    </header>

                    <section class="count_jobs">

                        <?php

                            $args = [
                                'post_type' => 'post',
                                'meta_key' => 'salario',
                                'meta_value' => 200,
                                'posts_per_page' => -1
                            ];

                            $results = new WP_Query($args);

                            if($results->have_posts()):
                                while($results->have_posts()):
                                    $results->the_post();

                                    echo "<h2>".get_the_title()."</h2>";
                                    echo "<a href='".get_the_permalink()."'>link</a>";
                                    echo "</br>";

                                endwhile;
                            endif;

                        ?>


                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>

                        <article class="card_vaga">
                            <a href="" class="title_vaga">
                                Almoxarifado
                            </a>

                            <div class="vaga_info">
                                <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                            
                            </div>

                            <div class="vaga_text">
                                <p>
                                    <span>Função</span>
                                    Almoxarife Descrição da vaga Local: Rio de Janeiro/RJ Salário: à combinar Benefícios: à combinar Fone: 24 3356-6090
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea unde tenetur nisi asperiores, odit nesciunt deserunt, recusandae error excepturi blanditiis corrupti dolores suscipit? Labore placeat nulla esse minus magnam?
                                </p>
                            </div>

                            <div class="vaga_share">
                                <p>Compartilhar</p>
                                <ul class="vaga_share_list">
                                    <li>
                                        <a class="link_facebook" href=""><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_whatsapp" href=""><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_twitter" href=""><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_email" href=""><i class="bi bi-envelope-fill"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_linkedin" href=""><i class="bi bi-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="link_telegram" href=""><i class="bi bi-telegram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="apply_vaga">
                                <a href="">
                                    <i class="bi bi-heart"></i> Salvar Trabalho
                                </a>
                                <a href="">
                                    <i class="bi bi-envelope-fill"></i>
                                    Envie seu currículo
                                </a>
                            </div>
                        </article>
                    </section>

                    <div class="more_vagas">
                        <a href="" class="link_more_vagas">
                            <i class="bi bi-briefcase"></i>
                            VER TODAS AS VAGAS
                        </a>
                    </div>

                </section>

                <div class="set_info">
                    <div class="set_center_info d-flex">
                       
                    </div>
                </div>

            </div>
        </section>

    </main>

<?php get_footer() ?>