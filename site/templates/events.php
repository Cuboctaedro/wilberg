<?php snippet('header') ?>

<main>

<section class="events__main flex flex-row flex-wrap py-6 gutter container mx-auto">
    
    <?php snippet( 'page-header', array('page'=> $page) ); ?>

    <div class="events__intro">
        <?= $page->intro()->kt(); ?>
    </div>
    
    <div class="events__list">
        
        <?php foreach ($page->children() as $event ): ?>

            <?php $event_color = $event->subject()->toPage()->sectionid(); ?>
        
        <article class="
        event border-t-2 border-solid border-wilberg-text pt-4 pb-6 
        event--<?= $event_color; ?> 
        <?php e($event->kinder()->toBool(), ' event--kinder'); ?>
        <?php e($event->freiluft()->toBool(), ' event--freiluft'); ?>
        ">
            <header class="event__header">
                <time datetime="<?= $event->date()->toDate(); ?>" class="bg-wilberg-<?= $event_color; ?> py-1 px-2 text-white font-bold text-sm xl:text-base inline-block"><?= $event->date()->toDate('d.m.Y'); ?></time>
                <h2 class="w-full font-bold text-lg xl:text-xl">
                    <a href="<?= $event->url(); ?>" class="text-wilberg-<?= $event_color; ?>"><?= $event->title(); ?></a>
                </h2>
                <p class="mb-3 italic"><?= $event->location(); ?></p>
            </header>
            <div class="text-base xl:text-lg">
                <?= $event->text()->kt(); ?>
            </div>
        </article>
        
        <?php endforeach; ?>
    </div>

</section>

</main>

<?php snippet('footer'); ?>