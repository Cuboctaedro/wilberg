<?php if ($image) : ?>
<picture>
    <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $image->crop(480, 320)->url(); ?>">
    <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $image->crop(768, 512)->url(); ?>">
    <source type="image/jpeg" media="(max-width: 1024px)" srcset="<?= $image->crop(1024, 512)->url(); ?>">
    <source type="image/jpeg" media="(min-width: 1025px)" srcset="<?= $image->crop(1280, 640)->url(); ?>">
    <img src="<?= $image->crop(1280, 640)->url(); ?>" class="block w-full xl:flex-none relative z-10"  alt="<?= $image->alt(); ?>">
</picture>
<?php endif; ?>