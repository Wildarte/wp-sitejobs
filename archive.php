<?php

get_header();

?>
<div class="over_filter"></div>
<main>

    <section class="container_vagas container d-flex">
        <div class="top_post d-flex container p-10">
            <a href="<?= home_url() ?>"><i class="bi bi-house-door-fill"></i> << Home</a>

            <a href="<?= home_url() ?>/ultimas-vagas"><< Voltar para os Resultados</a>
        </div>

        <div class="filters">

            <?php get_template_part('template-parts/content', 'filter') ?>
            
        </div>

        <section class="list_jobs_vagas">
            <section class="list_jobs ">
                <header class="header_list" style="flex-wrap: wrap; padding: 0">
                    <h3 class="p-10" style="font-weight: 500;"> Procurar Resultados </h3>

                    <div class="board_filter d-flex" style="justify-content: flex-start;">
                        <div class="open_filter p-10">
                            <i class="bi bi-list"></i>
                            FILTROS
                        </div>
                    </div>
                    

                </header>

                <section class="count_jobs">
                
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

                <div class="border_bottom_vagas">

                </div>

                
            </section>

            <div class="bottom_vagas">

                <ul class="pagination justify-content-center"><li class="page-item "><span class="mx-1 p-1"><span aria-current="page" class="page-numbers current">1</span></span></li><li class="page-item "><span class="mx-1 p-1"><a class="page-numbers" href="https://www.seujobs.com/ultimas-vagas/page/2/">2</a></span></li><li class="page-item "><span class="mx-1 p-1"><a class="page-numbers" href="https://www.seujobs.com/ultimas-vagas/page/3/">3</a></span></li><li class="page-item "><span class="mx-1 p-1"><span class="page-numbers dots">…</span></span></li><li class="page-item "><span class="mx-1 p-1"><a class="page-numbers" href="https://www.seujobs.com/ultimas-vagas/page/288/">288</a></span></li><li class="page-item "><span class="mx-1 p-1"><a class="next page-numbers" href="https://www.seujobs.com/ultimas-vagas/page/2/">Next »</a></span></li></ul>

            </div>

        </section>
        

        

    </section>

</main>

<?php get_footer() ?>
