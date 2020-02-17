<section class="events">
    
    <header class="events__header">
        <h1><?= $page->title(); ?></h1>
        <h2><?= $page->title(); ?></h2>
    </header>
    <div class="events__intro">
        <?= $page->intro()->kt(); ?>
    </div>
    
    <div class="events__list">
        
        <?php foreach ($page->children() as $event ): ?>
        
        <article class="
        event 
        event--<?= $event->subject()->toPage()->slug(); ?> 
        <?php e($event->kinder()->toBool(), ' event--kinder'); ?>
        <?php e($event->freiluft()->toBool(), ' event--freiluft'); ?>
        ">
            <header class="event__header">
                <time datetime="<?= $event->date()->toDate(); ?>"><?= $event->date()->toDate('d.m.Y'); ?></time>
                <h2>
                    <a href="<?= $event->url(); ?>" class=""><?= $event->title(); ?></a>
                </h2>
                <p><?= $event->location(); ?></p>
            </header>
            <div class="">
                <?= $event->text()->kt(); ?>
            </div>
        </article>
        
        <?php endforeach; ?>
    </div>

</section>