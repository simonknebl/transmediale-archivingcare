<?php foreach($pages->listed() as $page): ?>

    <?php if ($page->newstext()->exists()): ?>

        <?php snippet('news', ['page' => $page]); ?>

    <?php endif; ?>

<?php endforeach ?>