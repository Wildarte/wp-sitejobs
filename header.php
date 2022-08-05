<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php bloginfo('name') ?></title>
    <!-- wp head -->
    <?php wp_head(); ?>
    <!-- wp head -->

</head>
<body>

    <header class="header">
        <div class="header_content container d-flex">
            <div class="header_left d-flex">
                <a href="" class="link_logo">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?=  esc_url( $logo[0] )  ?>" alt="logo do site">
                </a>
                
            </div>

            <div class="header_right">
                <a href="">
                    <i class="bi bi-list-ul"></i>
                    Procurar vaga
                </a>
                <a href="" class="link_pub btn_blue">
                    <i class="bi bi-plus-circle"></i>
                    Publicar Vaga
                </a>
            </div>

            <button class="btn_menu">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </header>