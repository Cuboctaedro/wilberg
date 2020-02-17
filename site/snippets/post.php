<article class="post">
    <header class="post__header">
        <h3>
            <a href="<?= $post->url(); ?>" class=""><?= $post->title(); ?></a>
        </h3>
        <time datetime="<?= $post->date()->toDate(); ?>"><?= $post->date()->toDate('d.m.Y'); ?></time>
    </header>
    <div class="post__content">
        <?= $post->text()->excerpt(100); ?>
    </div>
</article>