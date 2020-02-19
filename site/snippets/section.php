<article class="section w-full md:w-1/3 bg-wilberg-<?= $section->sectionid(); ?>">
    <header class="section__header p-6">
        <?php snippet('svg/' . $section->sectionid() . '.svg' ); ?>
        <h2 class="pt-4 text-xl text-center font-bold leading-tight"><?= $section->title(); ?></h2>
    </header>
    <div class="section__content w-0 h-0 overflow-hidden">

    <?php if ($section->headerimage()->exists() && $section->headerimage()->isNotEmpty() ) : ?>
        <img src="<?= $section->headerimage()->toFile()->url(); ?>" class="" />
    <?php endif; ?>
        <div class="generated">
            <?= $section->text()->kt(); ?>
        </div>
    </div>
</article>