<footer class="footer">
        <div class="footer_content container d-flex">
            <div class="f-50 logo_footer">
                <a href="<?= home_url() ?>" class="link_logo">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?=  esc_url( $logo[0] )  ?>" alt="logo do site">
                </a>
                <h5>Sobre</h5>
                <p>
                    O Vagas de Emprego Pe tem como missão garantir que todos tenham acesso as melhores vagas de emprego do estado de Pernambuco gratuitamente. Desta forma, cooperamos para que todas as pessoas obtenham sucesso em sua busca.
                </p>

            </div>

            <div class="f-50">

                <h5>Links:</h5>

                <?php

                    wp_nav_menu([
                        'menu' => 'Menu Rodapé',
                        'theme_location' => 'menu-rodape',
                        'container' => false
                    ]);

                ?>
            </div>
            

        </div>
        <div class=" bottom_footer">
            <p>© 2022. Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>

    <!-- wp footer -->
    <?php wp_footer() ?>
    <!-- wp footer -->
    <script>
      
        url_site = '<?= get_template_directory_uri() ?>';
    </script>

</body>
</html>