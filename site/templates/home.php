<?php snippet('header') ?>

<main class="main" id="main">

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
                foreach ($pages->filterBy('intendedTemplate', 'section') as $section) {
                    snippet('section', array('section' => $section, 'i' => $i));
                    $i = $i + 1;
                }
                ?>

            </section>

            <section class="home__blog mb-12 lg:mb-0">

                <?php
                foreach ($pages->find('blog')->children()->sortBy('date', 'desc')->limit(5) as $post) {
                    snippet('post', array('post' => $post));
                }
                ?>

            </section>

        </div>

        <div class="w-full lg:w-1/4 flex flex-row flex-wrap lg:block">

            <div class="home__contact w-full sm:w-1/2 md:w-1/3 lg:w-full gutter">
                <?php snippet('contact-us'); ?>
            </div>

            <section class=" w-full sm:w-1/2 md:w-2/3 lg:w-full gutter ">
                <header class="bg-wilberg-text text-wilberg-main p-3">
                    <h2 class="w-full flex items-center justify-center">
                        <span class="text-base sm:text-xl xl:text-2xl font-bold">INFO zu CORONAVIRUS</span>
                    </h2>
                </header>

                <div class="border-l border-r border-b border-wilberg-text p-3">
                    <?php
                    if ($pages->find('coronavirus-info')) {
                        echo $pages->find('coronavirus-info')->contents()->kt();
                    }
                    ?>

                </div>

            </section>
        </div>

    </div>
</main>

<?php snippet('footer'); ?>