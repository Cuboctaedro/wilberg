<article class="post py-6 border-wilberg-main border-b-2">
    <header class="post__header font-bold text-lg leading-tight">
        <h3>
            <a href="<?= $post->url(); ?>" class=""><?= $post->title(); ?></a>
        </h3>
        <time datetime="<?= $post->date()->toDate(); ?>"><?= $post->date()->toDate('d.m.Y'); ?></time>
    </header>
    <div class="post__content">
        <?= $post->text()->excerpt(100); ?>
    </div>
</article>