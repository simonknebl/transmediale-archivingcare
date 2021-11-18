<div class="news-wrap" style="--background-color: <?= $page->color() ?>14">

    <?php if ($page->includedate()->toBool() === true): ?>

    <div class="news-date no-p p-float">

        <h4>

            <?= $page->date()->toDate('d.m.Y') ?>:

        </h4>

    </div>

    <?php endif ?>

    <div class="news-title wc-outline no-p">

        <h1>

            <?= $page->title()->kirbyText() ?>

        </h1>

    </div>

    <?php if ($page->cyclelist()->isNotEmpty() || $page->videolist()->isNotEmpty()): ?>

    <?php $videocount = intval($page->videolist()->toStructure()->count()); ?>
    <?php $imagecount = intval($page->cyclelist()->toFiles()->count()); ?>

    <?php if ($videocount + $imagecount > 1): ?>

    <?php $images =  $page->cyclelist()->toFiles(); ?>
    <?php $videos = $page->videolist()->toStructure(); ?>
    <?php snippet('ui-cycle', ['images' => $images, 'videos' => $videos, 'color' => $page->color().'14']); ?>

    <?php elseif ($videocount === 1 && $imagecount === 0): ?>

    <?php $videos = $page->videolist()->toStructure(); ?>

    <?php foreach($videos as $video): ?>

    <div class="artist-image main-column image-clip-2 video-clip">

        <?= $video->id() ?>

    </div>

    <div class="artist-image-copyright main-column">

        <?= $video->description()->kirbyText() ?>

    </div>

    <?php endforeach ?>

    <?php elseif ($videocount === 0 && $imagecount === 1): ?>

    <?php $image =  $page->cyclelist()->toFile(); ?>

    <div class="artist-image main-column image-clip-<?= random_int(1, 4); ?>">

        <img class="" src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1440]) ?>" alt="">

    </div>

    <div class="artist-image-copyright main-column">

        <?= $image->copyright()->kirbyText() ?>

    </div>

    <?php endif ?>
    <?php endif ?>

    <div class="news-text main-column">

        <?= $page->newstext()->kirbyText() ?>

    </div>

    <!-- EXTERNAL -->

    <?php
    
    $external = $page->externallist()->toStructure();

    if ($external->count()){

    snippet('ui-external', ['external' => $external, 'section' => 'news']);

    }
    
    ?>

</div>

<?php snippet('ui-divider') ?>