<?php if ( $image ) : ?>
<picture>
    <source type="image/jpeg" media="(max-width: 480px)" data-srcset="<?= $image->crop(480, 320)->url(); ?>">
    <source type="image/jpeg" media="(max-width: 768px)" data-srcset="<?= $image->crop(768, 512)->url(); ?>">
    <img data-src="<?= $image->crop(768, 512)->url(); ?>" class="block w-full object-cover h-screen lazyload"  alt="<?= $image->alt(); ?>">
</picture>
<?php endif; ?>