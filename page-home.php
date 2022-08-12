<?php
//Template Name: Home Page
get_header();
?>

    <main>

        <section class="hero">
            <div class="hero_content">
                <div class="board_search">
                    <h1>SEU EMPREGO A UM CLIQUE DE VOCÊ</h1>
                    <form action="<?= home_url() ?>" class="search">
                        <label for="">
                            <i class="bi bi-files"></i>
                            <input type="search" name="s" id="" placeholder="Busque por uma vaga">
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
                            <a href="<?= home_url() ?>/ultimas-vagas">
                                Mais Vagas <i class="bi bi-list-ul"></i>
                            </a>
                        </div>

                    </header>

                    <section class="count_jobs">

                        <?php

                            //filter com meta_key e meta_value
                            /*
                            $args = [
                                'post_type' => 'post',
                                'meta_key' => 'salario',
                                'meta_value' => 200,
                                'posts_per_page' => -1
                            ];
                            */

                            $args = [
                                'post_type' => 'post',
                            ];

                            $results = new WP_Query($args);

                            if($results->have_posts()):
                                while($results->have_posts()):
                                    $results->the_post();

                                   ?>

                                    <article class="card_vaga">
                                        <a href="<?= get_permalink() ?>" class="title_vaga">
                                            <?= get_the_title() ?>
                                        </a>

                                        <div class="vaga_info">
                                            <i class="bi bi-stopwatch"></i> <?= the_date('d/m/Y') ?> <i class="bi bi-geo-alt-fill"></i> <?= get_post_meta(get_the_ID(), 'local_vaga', true); ?> 
                                        </div>

                                        <div class="vaga_text">

                                            <?php

                                                $funcao = get_post_meta(get_the_ID(), 'funcao_vaga', true);
                                                $beneficios = get_post_meta(get_the_ID(), 'beneficios', true);


                                            ?>
                                            <p>
                                                <span><strong>Função:</strong> </span>
                                                <?= $funcao; ?> - <?= $funcao != "" ? "<span><strong>Benefícios:</strong>".$beneficios." </span>" : "" ?>
                                                <strong>Descrição da Vaga</strong> <?= get_the_excerpt() ?>
                                            </p>
                                        </div>

                                        <div class="vaga_share" style="margin: 20px 0;">
                                            <p>Compartilhar</p>
                                            <ul class="vaga_share_list">
                                                <li>
                                                    <a class="link_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink() ?>/"><i class="bi bi-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="link_whatsapp" href="https://wa.me/send?text=<?= get_the_permalink() ?>"><i class="bi bi-whatsapp"></i></a>
                                                </li>
                                                <li>
                                                    <a class="link_twitter" href="https://twitter.com/intent/tweet?url=<?= get_the_permalink() ?>&text="><i class="bi bi-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="link_email" href="mailto:?subject=<?= get_the_title() ?>&body=<?= get_the_permalink() ?>"><i class="bi bi-envelope-fill"></i></a>
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
                                            <a href="<?= get_permalink() ?>">
                                                <i class="bi bi-envelope-fill"></i>
                                                Envie seu currículo
                                            </a>
                                        </div>
                                    </article>

                                   <?php
                                endwhile;
                            
                            

                            endif;
                            
                            wp_reset_query();

                        ?>
                        
                    </section>

                    <div class="more_vagas">
                        <a href="<?= home_url() ?>/ultimas-vagas" class="link_more_vagas">
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