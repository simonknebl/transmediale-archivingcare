<div class="cycle-wrap">

    <div class="cycle-images">

        <div class="latte-previous cycle-previous"></div>
        <div class="latte-next cycle-next"></div>

        <div class="latte-carousel main-column cycle-entry image-clip-<?= random_int(1, 4); ?>">

            <?php if (isset($videos)): ?>

            <?php foreach($videos as $video): ?>

            <div class="latte-item" description="<?= $video->description()->text() ?>">

                <div class="cycle-image main-column cycle-video">

                    <?= $video->id() ?>                   

                </div>

            </div>
            <?php endforeach ?>

            <?php endif ?>


            <?php
            $i = 0;
            $l = count($images) - 1;
            foreach($images as $image): ?>

            <div class="latte-item" description="<?= $image->copyright() ?>">

                <div class="cycle-image main-column">

                    <?php if ($i > 1 && $i != $l): ?>

                        <img class="lazy" data-src="<?= $image->url() ?>" data-srcset="<?= $image->srcset([800, 1440]) ?>" alt="">

                    <?php else: ?>

                        <img class="" src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1440]) ?>" alt="">

                    <?php endif ?>

                </div>

            </div>

            <?php $i++; ?>
            <?php endforeach ?>

        </div>

    </div>

    <div class="cycle-description main-column cycle-init"></div>

</div>