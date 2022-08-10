
<div class="top_filter">
    <button class="btn_close_filter">
        <i class="bi bi-x-lg"></i>
    </button>

</div>
<div class="row_filter">
    <h3>Data da Publicação:</h3>

    <hr class="line">

    <div class="form_filter">
        
        <label for="data_pub1">
            <input type="radio" name="data_pub" id="data_pub1"> 24 horas
        </label>

        <label for="data_pub2">
            <input type="radio" name="data_pub" id="data_pub2"> 3 dias
        </label>

        <label for="data_pub3">
            <input type="radio" name="data_pub" id="data_pub3"> 7 dias
        </label>

        <label for="data_pub4">
            <input type="radio" name="data_pub" id="data_pub4"> 30 dias
        </label>
        
        <a class="btn_filter" href="<?= home_url(); ?>/?s=">
            Filtrar
        </a>
        
    </div>
</div>

<div class="row_filter">
    <h3>Tipo de Emprego</h3>

    <hr class="line">

    <div class="form_filter">

        <?php

            $terms = get_terms([
                'taxonomy' => 'category',
                'hide_empty' => false,
                'orderby' => 'term_id'
            ]);
            $count = 1;
            foreach($terms as $term):
                ?>

                <label for="data_filter<?= $count ?>">
                    <input type="radio" name="data_filter" id="data_filter<?= $count ?>"> <?= $term->name; ?>
                </label>

                
                
            <?php $count++; endforeach; ?>
        
        <a class="btn_filter" href="<?= home_url(); ?>/?s=">
            Filtrar
        </a>
        
    </div>

</div>