<?php snippet('header') ?>

<main>

    <article>
        <div class="contact__main flex flex-row flex-wrap py-6 gutter container mx-auto">

            <?php snippet('page-header', array('page' => $page)); ?>

            <div class="w-full lg:w-1/4 gutter mb-6 lg:mb-0">
                <img src="<?= $kirby->url('assets'); ?>/images/wilberg-contact.png" />
            </div>
            <div class="w-full lg:w-3/4 gutter">

                <div class="generated sm:text-lg md:text-xl lg:text-2xl font-thin">
                    <?= $page->text()->kt() ?>
                </div>

            </div>

        </div>

    </article>

    <section class="anonymous-form gutter container mx-auto mb-6 sm:mb-12">

        <h2 class="text-lg lg:text-xl font-bold mb-4 gutter">Sie können uns anonym und unverbindlich Ihre Anliegen
            schreiben:</h2>

        <div class="gutter">
            <?php snippet('form/anonymous'); ?>
        </div>

    </section>

    <section class="contact-form gutter container mx-auto">

        <h2 class="text-lg lg:text-xl font-bold mb-4 gutter">Oder melden Sie sich an und genießen Sie ganz persönliche
            Vorteile:</h2>

        <div class="gutter">
            <?php snippet('form/contact'); ?>
        </div>

    </section>

</main>

<?php snippet('footer'); ?>