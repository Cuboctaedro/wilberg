<?php snippet('header') ?>

<main>

    <article>
        <div class="about__main flex flex-row flex-wrap py-6 gutter container mx-auto">

            <?php snippet('page-header', array('page' => $page)); ?>

            <div class="w-full lg:w-1/2 gutter mb-6 lg:mb-0">

            </div>
            <div class="w-full lg:w-1/2 gutter">

                <div class="generated sm:text-lg md:text-xl lg:text-2xl font-thin">
                    <?= $page->text()->kt() ?>
                </div>

            </div>

        </div>

    </article>

<?php snippet('footer'); ?>