<?php
// Template Name: Anunciar Vaga
get_header();
?>

<main>

    <section class="container section_form">
        <header class="header_form_vaga">
            <h2>ANUNCIAR VAGA CONOSCO</h2>

            <hr class="line-short">
        </header>

        <section class="board_form_vaga">
            <h3>Anuncie suas vagas de emprego conosco, É GRATUITO! envie suas vagas através do formulário abaixo:</h3>

            <form action="" class="m-form">
                
                <div class="form_group">
                    <label for="">Nome da Empresa:</label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Função: <span class="color-red">*</span></label>
                    <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Quantidade de vagas: <span class="color-red">*</span></label>
                    <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Descrição/ Atividades: <span class="color-red">*</span></label>
                    <textarea name="" id="" cols="30" rows="6"></textarea>
                </div>

                <div class="form_group">
                    <label for="">Requisitos: <span class="color-red">*</span></label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Local de trabalho: <span class="color-red">*</span></label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Salário: <span class="color-red">*</span></label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Benefícios: <span class="color-red">*</span></label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">E-mail para recebimento de currículo: <span class="color-red">*</span></label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <label for="">Enviar currículo até: <span class="color-red">*</span></label>
                        <input type="text" name="" id="">
                </div>

                <div class="form_group">
                    <button type="submit" class="btn_form">
                        Publicar Emprego
                    </button>
                </div>

            </form>

            <div class="info_pub_vaga">

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

            </div>
        </section>
    </section>

</main>

<?php get_footer() ?>