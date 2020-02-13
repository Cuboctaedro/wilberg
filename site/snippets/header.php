<!doctype html>
<html lang="de">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= $page->metadescription()?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>

    <?php snippet('meta');?>

    <?= mix('/app.css') ?>
</head>

<body class="font-sans text-base text-black bg-white " >

    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header">
        
        <?php snippet('nav/nested'); ?>

        <?php if ($page->isHomePage()) : ?>
            <h1 class="site-header__title">Wilberg</h1>
            <h3 class="site-header__subtitle">Für Unna.</h3>
        <?php else : ?>
            <p class="site-header__title"><a href="<?= $site->url(); ?>">Wilberg</a></p>
            <p class="site-header__subtitle">Für Unna.</p>
        <?php endif; ?>

        <?php 
        if ($page->headerimage()->exists() && $page->headerimage()->isNotEmpty()) {
            $hero = $page->headerimage()->toFile();
        } elseif ($site->defaultheaderimage()->exists() && $site->defaultheaderimage()->isNotEmpty()) {
            $hero = $site->defaultheaderimage()->toFile();
        } else {
            $hero = false;
        }
        if ( $hero ) : ?>
        <div class="site-header__image">
            <?php snippet( 'fullimage', array('image' => $hero) ); ?>
        </div>
        <?php endif; ?>

    </header>

    <main class="main" id="main">
