<?php snippet('header') ?>

<main>

    <article>
        <div class="about__main flex flex-row flex-wrap py-6 gutter container mx-auto">
            
            <?php snippet( 'page-header', array('page'=> $page) ); ?>

            <div class="w-full lg:w-1/2 gutter">
            <?php 
            if ($page->portraitimage()->exists() && $page->portraitimage()->isNotEmpty()) {
                snippet('halfimage', array('image' => $page->portraitimage()->toFile() )); 
            }; 
            ?>
            </div>
            <div class="w-full lg:w-1/2 gutter">

                <div class="generated sm:text-lg md:text-xl lg:text-2xl font-thin">
                    <?= $page->text()->kt() ?>
                </div>

            </div>

        </div>

        <div class="flex flex-row flex-wrap py-6 gutter container mx-auto">

            <div class="w-full lg:w-3/4 gutter">

            </div>
            <div class="w-full lg:w-1/4 gutter">

            </div>

        </div> 
    </article>

</main>

<?php snippet('footer'); ?>