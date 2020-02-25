
<h2 class=" w-full md:w-1/3 <?php e( intval($i) < 3, 'md:order-' . strval(intval($i) + 1),  'md:order-' . strval(intval($i) + 3) );?>">

    <button 
        class="section-tab__header p-6 w-full h-full flex flex-col bg-wilberg-<?= $section->sectionid(); ?> hover:bg-wilberg-<?= $section->sectionid(); ?>_light "
        aria-controls="content-<?= $section->sectionid(); ?>" 
        aria-expanded="false" 
        tabindex="0" 
        id="heading-<?= $section->sectionid(); ?>" 
        aria-selected="false"
    >
        <?php snippet('svg/' . $section->sectionid() . '.svg' ); ?>
        <span class="block pt-4 w-full text-xl text-center font-bold leading-tight"><?= $section->title(); ?></span>
    </button>

</h2>

<div 
    class="section-tab__content w-full bg-wilberg-<?= $section->sectionid(); ?> <?php e(  intval($i) < 3, 'md:order-' . strval(intval($i) + 4),  'md:order-' . strval(intval($i) + 7) );?>" 
    id="content-<?= $section->sectionid(); ?>"
    role="region" 
    aria-hidden="true" 
    aria-labelledby="heading-<?= $section->sectionid(); ?>"
>
    <div class="p-6">
        <?php if ($section->headerimage()->exists() && $section->headerimage()->isNotEmpty() ) : ?>
            <img src="<?= $section->headerimage()->toFile()->url(); ?>" class="block mb-4 lazyload" />
        <?php endif; ?>

        <div class="generated">
            <?= $section->text()->kt(); ?>
        </div>

    </div>

</div>
