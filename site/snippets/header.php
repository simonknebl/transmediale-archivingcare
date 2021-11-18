<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->text() ?></title>

    <meta name="description" content="<?= $site->metadescription()->html() ?>" />
    <meta name="keywords" content="<?= $site->metakeywords() ?>" />

    <base target="_blank">

    <?php if (!$site->favicon()->isEmpty()):

    ?>

    <link rel="icon" type="image/png" sizes="16x16" href="<?= $site->favicon()->toFile()->resize(16,16)->url()?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $site->favicon()->toFile()->resize(32,32)->url()?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $site->favicon()->toFile()->resize(96,96)->url()?>">
    <link rel="icon" type="image/png" sizes="128x128" href="<?= $site->favicon()->toFile()->resize(128,128)->url()?>">

    <?php

  endif;

 ?>

    <link rel="preload" href="assets/fonts/Hershey-WS-AC-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/Hershey-WS-AC-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/Hershey-Noailles-Futura-Simplex-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/Hershey-WS-AC-WS-AC.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/Hershey-WS-AC-WS-ACOUTLINE.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/Hershey-WS-AC-BoldItalic.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/Hershey-Noailles-Futura-Noailles-Futura-Simplex-Italic.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <?= liveCSS('assets/builds/bundle.css') ?>

</head>

<body>