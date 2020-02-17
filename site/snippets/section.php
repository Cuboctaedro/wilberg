<article class="section section--<?= $section->slug(); ?>">
    <header class="section__header">
        <?php snippet('svg/' . $section->slug() '.svg' ); ?>
        <h2><?= $section->title(); ?></h2>
    </header>
    <div class="section__content">
        <img src="<?= $section->headerimage()->toFile()->url(); ?>" class="" />
        <div class="generated">
            <?= $section->text()->kt(); ?>
        </div>
    </div>
</article>