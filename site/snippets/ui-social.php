<?php
    
    $external = $site->externallist()->toStructure();

    if ($external->count()){

    snippet('ui-external', ['external' => $external, 'section' => 'contact']);

    }
    
?>

<?php snippet('ui-divider') ?>

<div class="banner-wrap main-column">

    <a href="<?= $site->akademie()->url() ?>">
        <img class="banner-m" src="assets/images/logo_banner_00.png">
    </a>

    <a href="<?= $site->transmediale()->url() ?>">
        <img class="banner-s" src="assets/images/logo_banner_01.png">
    </a>

    <a href="<?= $site->goethe()->url() ?>">
        <img src="assets/images/logo_banner_02.png">
    </a>

</div>