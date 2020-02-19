<?php 
$menu = $site->mainmenu()->toStructure();
if ($menu->isNotEmpty()) :
?>

<nav class="main-menu w-full fixed z-20">

    <button class="menutoggle flex flex-col items-center justify-center bg-wilberg-text p-2 absolute z-20" aria-label="Menü" id="menutoggle" aria-expanded="false" aria-controls="mainmenu">
        <span class="text-wilberg-main text-center uppercase mb-2">Menü</span>
        <span class="rounded-full bg-wilberg-main w-2 h-2 mb-2"></span>
        <span class="rounded-full bg-wilberg-main  w-2 h-2 mb-2"></span>
        <span class="rounded-full bg-wilberg-main  w-2 h-2"></span>
    </button>

    <ul class="main-menu__list absolute z-10 bg-wilberg-text text-white overflow-hidden" id="mainmenu">
    <?php foreach($menu as $item): ?>
        <?php if ($menu_item = $item->main()->toPage()) : ?>

            <?php $subMenu = $item->subMenu()->toPages(); ?>
            <?php if ($item->hasSubmenu()->isTrue() && $subMenuItems->isNotempty()) : ?>

                <li class="main-menu__item main-menu__item--has-submenu">
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

            <li class="main-menu__item">
                <a class="<?php e($menu_item->isOpen(), ' is-active ') ?> text-white" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
            </li>

            <?php endif ?>
        
        <?php endif ?>
    <?php endforeach ?>
    </ul>
</nav>


<?php endif ?>
