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

                <?php

                    //get_search_form(); //obtem o formulário de pesquisa

                    $args_search = [
                        'post_type' => 'post',
                        's' => get_search_query()
                    ];

                    $result_search = new WP_Query($args_search);

                    if($result_search->have_posts()):

                        while($result_search->have_posts()):
                            $result_search->the_post();

                ?>

                            <article class="card_vaga">
                                <a href="<?= get_permalink() ?>" class="title_vaga">
                                    <?= get_the_title() ?>
                                </a>

                                <div class="vaga_info">
                                    <i class="bi bi-stopwatch"></i> 1 dia atrás <i class="bi bi-geo-alt-fill"></i> <?= get_post_meta(get_the_ID(), 'local_vaga', true); ?> 
                                </div>

                                <div class="vaga_text">

                                    <?php

                                        $funcao = get_post_meta(get_the_ID(), 'funcao_vaga', true);
                                        $beneficios = get_post_meta(get_the_ID(), 'beneficios', true);


                                    ?>
                                    <p>
                                        <span><strong>Função:</strong> </span>
                                        <?= $funcao; ?> - <?= $funcao != "" ? "<span><strong>Benefícios:</strong>".$beneficios." </span>" : "" ?>
                                    </p>
                                </div>

                                <div class="vaga_share" style="margin: 20px 0;">
                                    <p>Compartilhar</p>
                                    <ul class="vaga_share_list">
                                        <li>
                                            <a class="link_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>/"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="link_whatsapp" href="https://whatsapp.com/send?text=<?= get_the_permalink() ?>"><i class="bi bi-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a class="link_twitter" href="https://twitter.com/intent/tweet?url=<?= get_the_permalink() ?>&text="><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="link_email" href="mailto:"><i class="bi bi-envelope-fill"></i></a>
                                        </li>
                                        <li>
                                            <a class="link_linkedin" href="https://linkedin.com/shareArticle?mini=true&url=<?= get_the_permalink() ?>&title=<?= get_the_title() ?>"><i class="bi bi-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a class="link_telegram" href="https://telegram.me/share/url?url=<?= get_the_permalink() ?>&text=<?= get_the_title() ?>"><i class="bi bi-telegram"></i></a>
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

                            <?php

                                endwhile; endif; wp_reset_query();
                            ?>
                
                    
                </section>

                <div class="border_bottom_vagas">

                </div>

                
            </section>

            <div class="bottom_vagas">

            

            </div>

        </section>
        

        

    </section>

</main>

<?php get_footer() ?>
