<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
    <main>

        <section class="container p-10">

            <h2 class="title-default"><?= get_the_title() ?></h2>

            <section>
                <?php get_the_content(); ?>
            </section>

        </section>

    </main>

<?php endwhile; endif; ?>
<?php get_footer() ?>