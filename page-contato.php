<?php
//Template Name: page contato
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
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
</style>

        <section class="container p-10">

            <h2 class="title-default p-10" style="font-weight: 400;"><?= get_the_title() ?></h2>

            <section class="content_default">
                <div class="retorno_form_contato"></div>
                <form action="" class="form_apply_vaga open_apply_form" method="POST" style="max-width: 100%;">
                    <div class="top_form">
                        <h4>Você consegue entrar em contato conosco diretamente através do formulário logo abaixo.</h4>
                    </div>
                    
                    <div class="form_group d-flex">
                        <div class="f-50 p-10">
                            <label for="">Nome:</label>
                            <input type="text" name="formName" id="contatoName" placeholder="Nome">
                        </div>
                        <div class="f-50 p-10">
                            <label for="">Sobrenome:</label>
                            <input type="text" name="formLastName" id="contatoSobrenome" placeholder="Sobrenome">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="form_group p-10 f-50">
                            <label for="">Seu E-mail</label>
                            <input type="email" name="formEmail" id="contatoEmail" placeholder="E-mail">
                        </div>
                    </div>

                    <div class="form_group p-10">
                        <label for="">Comentário ou Mensagem</label>
                        <textarea name="formMsg" id="contatoMsg" cols="30" rows="3"></textarea>
                    </div>

                    <div class="form_group p-10">
                        <button type="submit" class="send_apply" id="btn_contato">
                            Enviar
                        </button>
                    </div>
                </form>
            </section>

        </section>
        <script>
            
        </script>

    </main>

<?php endwhile; endif; ?>
<?php get_footer() ?>