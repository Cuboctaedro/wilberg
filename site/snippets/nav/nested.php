<?php 
$menu = $site->mainmenu()->toStructure();
if ($menu->isNotEmpty()) :
?>

<nav class="main-menu w-full fixed z-20">

    <button class="menutoggle flex flex-col items-center justify-center bg-wilberg-text p-2 absolute z-20" aria-label="Menü" id="menutoggle" aria-expanded="false" aria-controls="mainmenu">
        <span class="text-wilberg-main text-center uppercase sm:mb-2">Menü</span>
        <span class="rounded-full bg-wilberg-main w-2 h-2 mb-2 hidden sm:block"></span>
        <span class="rounded-full bg-wilberg-main  w-2 h-2 mb-2 hidden sm:block"></span>
        <span class="rounded-full bg-wilberg-main  w-2 h-2 hidden sm:block"></span>
    </button>

    <div class="main-menu__list absolute z-10 bg-wilberg-text text-white overflow-hidden" id="mainmenu">

        <ul class="pt-16 px-4 pb-6 sm:pt-24 sm:px-6 md:pt-32 md:px-8 md:pb-8">
        <?php foreach($menu as $item): ?>
            <?php if ($menu_item = $item->main()->toPage()) : ?>

                <?php $subMenu = $item->subMenu()->toPages(); ?>
                <?php if ($item->hasSubmenu()->isTrue() && $subMenuItems->isNotempty()) : ?>

                    <li class="main-menu__item main-menu__item--has-submenu mb-3 lg:mb-6 text-base sm:text-lg lg:text-2xl">
                        <a class="<?php e($menu_item->isOpen(), ' is-active ') ?> text-white" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
                        <ul class="submenu">
                        <?php foreach($subMenu as $child): ?>
                            <li class="submenu__item">
                                <a class="<?php e($child->isOpen(), ' is-active ') ?> text-white" href="<?= $child->url() ?>"><?= $child->title() ?></a>
                            </li>
                        <?php endforeach ?>
                        </ul>
                    </li>
                <?php else: ?>

                <li class="main-menu__item mb-3 lg:mb-6 text-base sm:text-lg lg:text-2xl">
                    <a class="<?php e($menu_item->isOpen(), ' is-active ') ?> text-white" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
                </li>

                <?php endif ?>
            
            <?php endif ?>
        <?php endforeach ?>
        </ul>
 
    </div>


</nav>


<?php endif ?>
