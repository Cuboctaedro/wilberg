<!doctype html>
<html lang="de">

<head>
    <title><?= e(!$page->isHomePage(), $page->title() . ' | ', '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= $page->metadescription() ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>" />

    <?php snippet('meta'); ?>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,400,400i,700,900&display=swap" rel="stylesheet">

    <?= mix('/app.css') ?>
</head>

<body class="font-sans text-base text-wilberg-text bg-white ">

    <a class="skip-link" href="#main">Skip to content</a>

    <?php snippet('hero'); ?>