<footer class="footer">
        <div class="footer_content container">
            <h5>Sobre nós</h5>

            <ul>
                <li>
                    <a href="">Sobre</a>
                </li>
                <li>
                    <a href="">Contato</a>
                </li>
                <li>
                    <a href="">Privacidade</a>
                </li>
                <li>
                    <a href="">Termos e Condições</a>
                </li>
                <li></li>
            </ul>
        </div>
        <div class=" bottom_footer">
            <p>© 2022. Todos os direitos reservados</p>
        </div>
    </footer>


    <!-- wp footer -->
    <?php wp_footer() ?>
    <!-- wp footer -->
    <script>
        //url = <?= home_url() ?>;
        const bf = document.getElementById('send_apply');
        if(bf){
            bf.addEventListener('click', (e) => {
                e.preventDefault();
                sendForm('<?= get_template_directory_uri() ?>/submit_form.php');
            });
        }
    </script>

</body>
</html>