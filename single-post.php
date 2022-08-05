<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<main>

    <section class="container">

        <div class="top_post d-flex container p-10">
            <a href=""><i class="bi bi-house-door-fill"></i> << Home</a>

            <a href=""><< Voltar para os Resultados</a>
        </div>

        <div class="body_post d-flex p-10">

            <div class="post_left">

                <h1 class="title_post p-10">Recepcionista Comercial <span id="cat_vaga">Tempo Integral</span></h1>
                <h1 class="title_post p-10">Título 2: <?= get_the_title(); ?></h1>
                <h1 class="title_post p-10">Valor: <?= get_post_meta(get_the_ID(), 'salario', true); ?></h1>

                <hr class="line">

                <div class="vaga_info p-10">
                    <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> Pernambuco 
                </div>

                <div class="detalhe_info d-flex p-10">

                    <div class="detalhes_vaga">

                        <h2>Destalhes da Vaga:</h2>

                        <hr class="line">

                        <p>Função: <span>Auxiliar de Produção</span></p>

                        <p>Descrição da vaga:</p>

                        <p>Salário: R$ 6,24 PH</p>

                        <p>Benefícios: <span> VT em dinheiro + Refeição no local;</span></p>

                        <p>Requisitos: <span>6 meses de experiência; Ensino Médio Completo; Ter disponibilidade de horário</span></p>

                        <p>Atividades: <span>Atividades Receber, conferir, separar e embalar produtos no estoque; Lidar com notas fiscais de faturamento e liberação de produtos para distribuição interna e externa;</span></p>

                        <div class="vaga_share" style="margin: 20px 0;">
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

                        <div class="more_vagas_tags">

                            <h2>Mais Vagas:</h2>

                            <hr class="line">

                            <ul>
                                <li>
                                    <a href="">Recepcionista</a>
                                </li>
                            </ul>
                            
                        </div>

                        
                    </div>

                    <div class="detail_side">

                        <div class="board_detail">
                            <p><strong>Empresa:</strong> <span>Confidencial</span></p>

                            <p><strong>Salário:</strong> R$<span></span></p>

                            <p><strong>Tipo de emprego:</strong> <span>Tempo integral</span></p>
                        </div>

                        <ul class="link_list">
                            <li>
                                <a href=""><i class="bi bi-heart"></i> Mais Vagas</a>
                            </li>
                            <li>
                                <a href=""><i class="bi bi-heart"></i> Auxiliar</a>
                            </li>
                            <li>
                                <a href=""><i class="bi bi-heart"></i> Estágios</a>
                            </li>
                            <li>
                                <a href=""><i class="bi bi-heart"></i> PCD | PNE</a>
                            </li>
                            <li>
                                <a href=""><i class="bi bi-heart"></i> Recepcionista</a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="bottom_vaga">

                    <div class="vagas_tips">

                        <h2>Dicas aos candidatos:</h2>
                        <ul>
                            <li>
                                <p>- Esteja com o currículo sempre atualizado, e de preferência em formato Word ou PDF.</p>
                            </li>
                            <li>
                                <p>- Só envie seu currículo caso esteja dentro do perfil solicitado pela empresa, nunca atrase numa entrevista de emprego.</p>
                            </li>
                            <li>
                                <p>- Envie uma breve apresentação sua junto ao currículo, fique atento aos erros gramaticais.</p>
                            </li>
                        </ul>
                    </div>

                    <p><strong>Obs: </strong>Ao anexar seu currículo no formulário abaixo, segue diretamente para a empresa que está contratando.</p>

                    <button href="" class="link_pub btn_blue btn_candidatar" onclick="openForm()">
                        CANDIDATE-SE NESTA VAGA
                    </button>

                </div>

               


            </div>


            <div class="post_right">

                <div class="side_info_empresa">

                    <div class="head_info_empresa p-10">
                        <h4>Informações da empresa</h4>
                    </div>

                    <div class="body_info_empresa p-10">
                        <img src="https://images.pexels.com/photos/1181524/pexels-photo-1181524.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">

                        <h4>Confidencial</h4>

                        <p>Localização: <span>Recife</span>, <span>Pernambuco</span></p>

                        <button class="btn_default" style="width: 100%; margin: 10px 0" onclick="openForm()">
                            Enviar Currículo
                        </button>
                    </div>

                </div>

            </div>

            <section class="list_jobs" style="margin-top: 10px; border-radius: 10px 10px 0 0; overflow: hidden">
                <header class="header_list">
                    <h3>- Vagas de emprego recentes</h3>

                    <div>
                        <a href="">
                            Mais Vagas <i class="bi bi-list-ul"></i>
                        </a>
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
            </section>

        </div>

    </section>

    <div class="over_form_apply">
        <form action="" class="form_apply_vaga open_apply_form">
            <div class="top_form">
                <h4>Cadastre-se</h4>
                <div class="close_form_apply">
                    <i class="bi bi-x"></i>
                </div>
            </div>
            <div class="form_group d-flex">
                <div class="f-50 p-10">
                    <label for="">Nome:</label>
                    <input type="text" name="" id="" placeholder="Nome">
                </div>
                <div class="f-50 p-10">
                    <label for="">Sobrenome:</label>
                    <input type="text" name="" id="" placeholder="Sobrenome">
                </div>
            </div>

            <div class="form_group p-10">
                <label for="">Seu E-mail</label>
                <input type="email" name="" id="">
            </div>

            <div class="form_group p-10">
                <label for="">Anexar Curriculo</label>
                <input type="file" name="" id="">
            </div>

            <div class="form_group p-10">
                <label for="">Carta de Apresentação</label>
                <textarea name="" id="" cols="30" rows="3"></textarea>
            </div>

            <div class="form_group p-10">
                <button type="submit" class="send_apply">
                    Enviar
                </button>
                <button class="cancel_send_apply">
                    Fechar
                </button>
            </div>
        </form>
    </div>

</main>

<?php endwhile; endif; ?>

<?php get_footer() ?>
