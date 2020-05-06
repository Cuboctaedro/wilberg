<div class="who-am-i flex justify-center">
    <a href="<?= $pages->find('wer-ich-bin')->url(); ?>" class="block max-w-72">

        <img src="<?= $kirby->url('assets'); ?>/images/wilberg-about.png" class="shadow-2xl block rounded-full w-full" />
        <div class="flex flex-row items-center justify-center mt-6 py-2 pl-3 pr-2 bg-wilberg-text text-wilberg-main shadow-2xl inline-block w-full hover:bg-wilberg-text_light">
            <span class="text-base sm:text-xl xl:text-2xl font-bold">Wer ich bin</span>
            <span class="w-8 h-8"><?php snippet('icons/material/arrow_right'); ?></span>
        </div>

    </a>
</div>