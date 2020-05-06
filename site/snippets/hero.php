    <header class="site-hero relative border-wilberg-text border-b-24">

        <?php snippet('nav/nested'); ?>

        <div class="site-hero__title site-header absolute z-10 w-full pt-8 px-4">

            <div class="site-hero__background absolute z-0 h-12 inset-x-0 top-0 "></div>

            <?php if ($page->isHomePage()) : ?>
                <h1 class="relative z-10 text-wilberg-main uppercase text-3xl sm:text-4xl md:text-6xl lg:text-7xl leading-none tracking-widest font-black">Wilberg:</h1>
                <p class="relative z-10 text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-none">Für Unna.</p>
            <?php else : ?>
                <p class="relative z-10 text-wilberg-main uppercase text-3xl sm:text-4xl md:text-6xl lg:text-7xl leading-none tracking-widest font-black"><a href="<?= $site->url(); ?>">Wilberg</a></p>
                <p class="relative z-10 text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-none">Für Unna.</p>
            <?php endif; ?>

        </div>

        <?php
        if ($page->headerimage()->exists() && $page->headerimage()->isNotEmpty()) {
            $hero = $page->headerimage()->toFile();
        } elseif ($site->defaultheaderimage()->exists() && $site->defaultheaderimage()->isNotEmpty()) {
            $hero = $site->defaultheaderimage()->toFile();
        } else {
            $hero = false;
        }
        if ($hero) : ?>
            <div class="site-hero__image mx-auto relative z-0">
                <div class="hero-left hidden xl:block w-40 h-full absolute z-20 inset-y-0 left-0"></div>
                <?php snippet('image/hero', array('image' => $hero)); ?>
                <div class="hero-right hidden xl:block w-40 h-full absolute z-20 inset-y-0 right-0"></div>
            </div>
        <?php endif; ?>

    </header>