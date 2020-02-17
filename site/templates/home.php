<?php snippet('header') ?>

<main>

    <div class="home__main">

        <article class="home__text ">

            <div class="generated">
                <?= $page->text()->kt() ?>
            </div>
            
        </article>

        <div class="home__about">
            <?php snippet('who-am-i'); ?>
        </div>

    </div>
    
    <div class="flex">
        
        <div class="col">
            
            <section class="home__sections">
    
                <?php
                foreach ( $pages->filterBy('intendedTemplate', 'section') as $section ) {
                    snippet( 'section', array( 'section' => $section ) );
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
        
        <div class="col">
            
            <div class="home__contact">
                <?php snippet('contact-us'); ?>
            </div>
            
            <section class="">
                <header>
                    <h2>Kalendar</h2>
                </header>
                
                <?php
                    foreach ( $pages->find('kalender')->children()->sortBy('date', 'desc')->limit(5) as $event ) {
                        snippet( 'event', array( 'event' => $event ) );
                    }
                ?>
                
                <footer>
                    <a class="" href="<?= $pages->find('kalender')->url(); ?>">Zum Kalender</a>
                </footer>

            </section>
        </div>

    </div>



</main>


<?php snippet('footer'); ?>
