<?php snippet('header') ?>

<main>

    <div class="home__main flex  flex-row flex-wrap py-6 gutter container mx-auto">

        <article class="home__text w-full lg:w-4/5 lg:order-2 gutter mb-6 lg:mb-0">

            <div class="generated sm:text-lg md:text-xl lg:text-2xl font-thin">
                <?= $page->text()->kt() ?>
            </div>
            
        </article>

        <div class="home__about w-full lg:w-1/5 lg:order-1 gutter">
            <?php snippet('who-am-i'); ?>
        </div>

    </div>
    
    <div class="flex flex-wrap gutter container mx-auto">
        
        <div class="w-full lg:w-3/4 gutter">
            
            <section class="home__sections flex flex-row flex-wrap">
    
                <?php
                $i = 0;
                foreach ( $pages->filterBy('intendedTemplate', 'section') as $section ) {
                    snippet( 'section', array( 'section' => $section, 'i' => $i ) );
                    $i = $i + 1;
                }
                ?>

            </section>

            <section class="home__blog">
                
                <?php
                foreach ( $pages->find('blog')->children()->sortBy('date', 'desc')->limit(5) as $post ) {
                    snippet( 'post', array( 'post' => $post ) );
                }
                ?>

            </section>

        </div>
        
        <div class="w-full lg:w-1/4 gutter">
            
            <div class="home__contact">
                <?php snippet('contact-us'); ?>
            </div>
            
            <section class="border border-wilberg-text">
                <header class="bg-wilberg-text text-wilberg-main p-3">
                    <h2 class="text-xl text-center w-full">Kalendar</h2>
                </header>
                
                <div class=" p-3">
                    <?php
                        foreach ( $pages->find('kalender')->children()->sortBy('date', 'desc')->limit(5) as $event ) {
                            snippet( 'event', array( 'event' => $event ) );
                        }
                    ?>

                </div>

                <footer class="p-3 text-right">
                    <a class="font-bold uppercase" href="<?= $pages->find('kalender')->url(); ?>">Zum Kalender</a>
                </footer>

            </section>
        </div>

    </div>



</main>


<?php snippet('footer'); ?>
