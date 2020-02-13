<?php 
$menu = $site->mainmenu()->toStructure();
if ($menu->isNotEmpty()) :
?>

<nav class="main-menu w-full h-0 fixed z-10 overflow-hidden">

    <button class="site-header__toggle" aria-label="Menü" id="menutoggle" aria-expanded="false" aria-controls="mainmenu"></button>

    <ul class="main-menu__list" id="mainmenu">
    <?php foreach($menu as $item): ?>
        <?php if ($menu_item = $item->main()->toPage()) : ?>

            <?php $subMenu = $item->subMenu()->toPages(); ?>
            <?php if ($item->hasSubmenu()->isTrue() && $subMenuItems->isNotempty()) : ?>

                <li class="main-menu__item main-menu__item--has-submenu">
                    <a class="<?php e($menu_item->isOpen(), ' is-active ') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
                    <ul class="submenu">
                    <?php foreach($subMenu as $child): ?>
                        <li class="submenu__item">
                            <a class="<?php e($child->isOpen(), ' is-active ') ?>" href="<?= $child->url() ?>"><?= $child->title() ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </li>
            <?php else: ?>

            <li class="main-menu__item">
                <a class="<?php e($menu_item->isOpen(), ' is-active ') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
            </li>

            <?php endif ?>
        
        <?php endif ?>
    <?php endforeach ?>
    </ul>
</nav>


<?php endif ?>
