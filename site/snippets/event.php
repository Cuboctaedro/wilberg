<article class="event event--<?= $event->subject()->toPage()->slug(); ?>">
    <header class="event__header">
        <a href="<?= $event->url(); ?>">
            <time datetime="<?= $event->date()->toDate(); ?>"><?= $event->date()->toDate('d.m.Y'); ?></time>
            <h3><?= $event->title(); ?></h3>
        </a>
    </header>
        <div class="event__content">
        <?= $event->text()->excerpt(100); ?>
    </div>
</article>