<article class="section section--<?= $section->slug(); ?>">
    <header class="section__header">
        <?php snippet('svg/' . $section->sectionid() . '.svg' ); ?>
        <h2><?= $section->title(); ?></h2>
    </header>
    <div class="section__content">

    <?php if ($section->headerimage()->exists() && $section->headerimage()->isNotEmpty() ) : ?>
        <img src="<?= $section->headerimage()->toFile()->url(); ?>" class="" />
    <?php endif; ?>
        <div class="generated">
            <?= $section->text()->kt(); ?>
        </div>
    </div>
</article>