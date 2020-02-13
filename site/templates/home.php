<?php snippet('header') ?>

<div class="home__main">

    <article class="home__text ">

        <h2 class="visually"><?= $page->tetitlext() ?></h2>

        <div class="generated">
            <?= $page->text()->kt() ?>
        </div>
        
    </article>

    <div class="home__about">
        <?php snippet('who-am-i'); ?>
    </div>

</div>

<div class="home__sections">
    
    <?php
    foreach ( $pages->filterBy('intendedTemplate', 'section') as $section ) {
        snippet( 'section', array( 'section' => $section ) );
    }
    ?>

</div>

<?php snippet('footer'); ?>
