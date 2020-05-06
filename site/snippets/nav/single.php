<?php
$menu = $site->footermenu()->toStructure();
if($menu->isNotEmpty()):
?>

<nav class="footer-menu gutter">
    <ul class="footer-menu__list flex flex-row flex-wrap" >
    <?php foreach($menu as $item): ?>
        <?php if ($menu_item = $item->main()->toPage()) : ?>
 
            <li class="footer-menu__item pr-2">
                <a class="<?php e($menu_item->isOpen(), ' is-active ') ?> text-wilberg-main font-bold" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
            </li>
        
        <?php endif ?>
    <?php endforeach ?>
    </ul>
</nav>

<?php endif ?>
