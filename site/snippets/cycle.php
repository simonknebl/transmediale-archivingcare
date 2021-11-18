<div class="news-title wc-outline no-p">

    <h1>

        <?= $page->title()->kirbyText() ?>

    </h1>

</div>

<?php $images =  $page->cyclelist()->toFiles(); ?>
<?php snippet('ui-cycle', ['images' => $images]); ?>

<?php snippet('ui-divider') ?>