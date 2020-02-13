<?php
$menu = $site->footermenu()->toStructure();
if($menu->isNotEmpty()):
?>

<nav class="footer-menu">
    <ul class="footer-menu__list" >
    <?php foreach($menu as $item): ?>
        <?php if ($menu_item = $item->main()->toPage()) : ?>
 
            <li class="footer-menu__item">
                <a class="<?php e($menu_item->isOpen(), ' is-active ') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a>
            </li>
        
        <?php endif ?>
    <?php endforeach ?>
    </ul>
</nav>

<?php endif ?>
