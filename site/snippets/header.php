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

<body class="font-sans text-base text-wilberg-text bg-white " >

    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-hero relative">
        
        <?php snippet('nav/nested'); ?>

        <div class="site-hero__title site-header relative z-10 w-full pt-8 px-4">

            <div class="site-hero__background absolute z-0 h-12 inset-x-0 top-0 "></div>

            <?php if ($page->isHomePage()) : ?>
                <h1 class="relative z-10 text-wilberg-main uppercase text-7xl leading-none tracking-widest font-black">Wilberg:</h1>
                <p class="relative z-10 text-5xl leading-none">Für Unna.</p>
            <?php else : ?>
                <p class="relative z-10 text-wilberg-main uppercase text-7xl leading-none tracking-widest font-black"><a href="<?= $site->url(); ?>">Wilberg</a></p>
                <p class="relative z-10 text-5xl leading-none">Für Unna.</p>
            <?php endif; ?>

        </div>


        <?php 
        if ($page->headerimage()->exists() && $page->headerimage()->isNotEmpty()) {
            $hero = $page->headerimage()->toFile();
        } elseif ($site->defaultheaderimage()->exists() && $site->defaultheaderimage()->isNotEmpty()) {
            $hero = $site->defaultheaderimage()->toFile();
        } else {
            $hero = false;
        }
        if ( $hero ) : ?>
        <div class="site-hero__image absolute top-0 z-0 inset-x-0 w-full h-auto">
            <?php snippet( 'fullimage', array('image' => $hero) ); ?>
        </div>
        <?php endif; ?>

    </header>

    <main class="main" id="main">
