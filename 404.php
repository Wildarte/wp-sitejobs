<?php get_header() ?>

    <main>

<style>
    .content_default{
        border: 1px solid #f1f1f1;
        border-radius: 4px;
        padding: 8px;
    }
    .content_default p{
        margin-bottom: 10px;
    }
    @media(max-width: 420px){
        .page-alt{
            
        }
    }
</style>

        <section class="container p-10 page-alt" style="padding: 100px 0 140px">



            <h2 class="title-default p-10" style="font-weight: 500;">Desculpe, mas não encontramos o que você procura!</h2>

            <section class="p-10">
                <p>Conteúdo não encontrado. Você pode fazer uma pesquisa, ou ainda veja abaixo uma lista de nossos conteúdos mais acesssados!</p>

                <div class="" style="background-image: url('<?= get_post_meta(get_the_ID(), 'img_header', true); ?>'); padding: 40px 0px">
                    <div class="board_search" style="width: 100%;">
                        <h1><?= get_post_meta(get_the_ID(), 'title_home', true); ?></h1>
                        
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


                <section class="list_jobs">
                    <header class="header_list">
                        
                        <h3>- Encontramos algumas vagas para você</h3>

                       
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
                                            <i class="bi bi-stopwatch"></i> <?=  get_the_date('d/m/Y') ?> <i class="bi bi-geo-alt-fill"></i> <?= get_post_meta(get_the_ID(), 'local_vaga', true); ?> 
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

            </section>

        </section>

        

    </main>


<?php get_footer() ?>