<?php snippet('header') ?>

<main>

    <article>
        <div class="about__main flex flex-row flex-wrap py-6 gutter container mx-auto">
            
            <?php snippet( 'page-header', array('page'=> $page) ); ?>

            <div class="w-full lg:w-1/2 gutter mb-6 lg:mb-0">
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

        <div class="w-full bg-wilberg-main">

            <div class="flex flex-row flex-wrap py-6 gutter container mx-auto">

                <div class="w-full lg:w-3/4 gutter mb-6 lg:mb-0">
                    <?php if ( $page->vita()->isNotEmpty() ): ?>

                        <?php foreach( $page->vita()->toStructure() as $entry ) : ?>

                            <div class="flex flex-row flex-wrap md:flex-no-wrap items-baseline pb-1">

                                <div class="w-full md:w-32 flex-none text-base text-white "><?= $entry->date(); ?></div>

                                <div class="w-full md:w-auto flex-none md:flex-auto text-base xl:text-lg text-wilberg-text"><?= $entry->contents()->kt(); ?></div>

                            </div>

                         <?php endforeach; ?>

                    <?php endif; ?>

                </div>

                <div class="w-full lg:w-1/4 gutter flex flex-row flex-wrap">

                    <?php if ( $page->vitaimages()->isNotEmpty() ): ?>

                        <?php foreach( $page->vitaimages()->toFiles() as $pic ) : ?>
                        
                            <div class="gutter sm:w-1/2 md:w-1/3 lg:w-full mb-6">
                                <img src="<?= $pic->url(); ?>" class="block w-full" />
                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

            </div> 

        </div>

    </article>

</main>

<?php snippet('footer'); ?>