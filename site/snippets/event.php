<?php $color = $event->subject()->toPage()->sectionid(); ?>

<article class="event  mb-6">
    <header class="event__header font-bold text-lg leading-tight">
        <a href="<?= $event->url(); ?>" class="text-wilberg-<?= $color ?> hover:text-wilberg-<?= $color ?>_light">
            <time datetime="<?= $event->date()->toDate(); ?>"><?= $event->date()->toDate('d.m.Y'); ?></time>
            <h3><?= $event->title(); ?></h3>
        </a>
    </header>
        <div class="event__content">
        <?= $event->text()->excerpt(100); ?>
    </div>
</article>