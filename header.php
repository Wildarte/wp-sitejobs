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
    <?php if(is_single()): ?>
    
    <meta name="description" content="<?= get_the_excerpt() ?>">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= get_the_permalink() ?>" />
    <meta name="author" content="<?= get_the_author() ?>">
    <meta name="creator" content="<?= get_the_author() ?>">

    <meta property="og:url" content="<?= get_the_permalink() ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= get_the_title() ?>" />
    <meta property="og:description" content="<?= get_the_excerpt() ?>" />
    <meta property="og:image" content="<?= the_post_thumbnail_url() ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= get_the_title() ?>">
    <meta name="twitter:description" content="<?= get_the_excerpt() ?>">
    <meta name="twitter:image" content="<?= the_post_thumbnail_url() ?>">

    <?php else: ?>

    <meta name="description" content="<?= get_the_excerpt() ?>">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= home_url() ?>" />
    <meta name="author" content="<?= get_the_author() ?>">
    <meta name="creator" content="<?= get_the_author() ?>">
        
    <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>

    <meta property="og:url" content="<?= home_url() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= bloginfo('name') ?>" />
    <meta property="og:description" content="<?= bloginfo('description') ?>" />
    <meta property="og:image" content="<?=  esc_url( $logo[0] )  ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= bloginfo('name') ?>">
    <meta name="twitter:description" content="<?= bloginfo('description') ?>">
    <meta name="twitter:image" content="<?=  esc_url( $logo[0] )  ?>">

    <?php endif; ?>

</head>
<body>

    <header class="header">
        <div class="header_content container d-flex">
            <div class="header_left d-flex">
                <a href="<?= home_url() ?>" class="link_logo">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?=  esc_url( $logo[0] )  ?>" alt="logo do site">
                </a>
                
            </div>

            <div class="header_right">
                <a href="<?= home_url() ?>/ultimas-vagas">
                    <i class="bi bi-list-ul"></i>
                    Procurar vaga
                </a>
                <a href="<?= home_url() ?>/anunciar-vaga" class="link_pub btn_blue">
                    <i class="bi bi-plus-circle"></i>
                    Publicar Vaga
                </a>
            </div>

            <button class="btn_menu">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </header>