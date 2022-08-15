<?php get_header() ?>
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
                <?= get_the_content(); ?>
            </section>

        </section>

        

    </main>

<?php endwhile; endif; ?>
<?php get_footer() ?>