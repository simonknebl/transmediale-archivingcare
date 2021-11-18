<?php $pn = 0  ?>

<?php foreach($pages->listed() as $page): ?>

<?php if ($page->artist()->exists()): ?>

<?php $pn++; ?>

<div class="artist-wrap" link="<?= $page->slug() ?>">

    <!-- TITLE -->

    <div class="artist-status no-p p-float light">

        <h4>

            Resident

        </h4>

    </div>

    <div class="artist-name no-p p-float">

        <h4>

            <?= $page->artist()->text() ?>:

        </h4>

    </div>

    <div class="artist-title wc-outline no-p">

        <h1>

            <?= $page->projecttitle()->text() ?>

        </h1>

    </div>

    <!-- IMAGE -->

    <?php if ($page->imagelist()->isNotEmpty()): ?>

    <?php $count = $page->imagelist()->toFiles()->count(); ?>

    <?php if($count === 1): ?>

    <?php $image =  $page->imagelist()->toFile(); ?>

    <div class="artist-image main-column image-clip-<?= random_int(1, 4); ?>">

        <img class="" src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1440]) ?>" alt="">

    </div>

    <div class="artist-image-copyright main-column">

        <?= $image->copyright()->kirbyText() ?>

    </div>

    <?php elseif ($count > 1): ?>

    <?php $images =  $page->imagelist()->toFiles(); ?>
    <?php snippet('ui-cycle', ['images' => $images]); ?>

    <?php endif ?>

    <?php endif ?>

    <!-- TEXT TOP -->

    <div class="artist-text-top main-column">

        <?= $page->maindescription()->kirbyText() ?>

    </div>

    <!-- TEXT DROPDOWN -->

    <div class="artist-text-dropdown main-column dropdown-closed a-dropdown-<?= $pn ?>">

        <div class="dropdown-content">

            <?= $page->extradescription()->kirbyText() ?>

        </div>

    </div>

    <div class="ui-dropdown main-column" link=".a-dropdown-<?= $pn ?>">

        <?php snippet('ui-ellipsis') ?>

    </div>

    <!-- EXTERNAL -->

    <?php
    
    $external = $page->externallist()->toStructure();

    if ($external->count()){

    snippet('ui-external', ['external' => $external, 'section' => 'artist']);

    }
    
    ?>

</div>

<?php snippet('ui-divider') ?>


<?php endif; ?>
<?php endforeach ?>