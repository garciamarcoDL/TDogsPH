<?php

/*
|--------------------------------------------------------------------------
| TDogsPH Global Paths
|--------------------------------------------------------------------------
*/

$basePath = '';

$nestedFolders = [

    '/booking/',

    '/our-story/',

    '/events/'

];

foreach ($nestedFolders as $folder) {

    if (strpos($_SERVER['PHP_SELF'], $folder) !== false) {

        $basePath = '../';

        break;

    }

}

/*
|--------------------------------------------------------------------------
| Asset Paths
|--------------------------------------------------------------------------
*/

$assetPath = $basePath . 'assets/';
$imagePath = $assetPath . 'images/';
$cssPath   = $assetPath . 'css/';
$jsPath    = $assetPath . 'js/';

/*
|--------------------------------------------------------------------------
| Page Information
|--------------------------------------------------------------------------
*/

$currentPage = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

<title>

<?= isset($pageTitle) ? $pageTitle : 'TDogsPH | Luxury Pet Grooming'; ?>

</title>

<meta
    name="description"
    content="Luxury Pet Grooming and Spa Services">

<meta
    name="theme-color"
    content="#513229">

<link
    rel="preconnect"
    href="https://fonts.googleapis.com">

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap"
    rel="stylesheet">

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!-- ==========================================
BASE
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>base/variables.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>base/style.css">

<!-- ==========================================
LAYOUT
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>layout/navbar.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>layout/footer.css">

<!-- ==========================================
COMPONENTS
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>components/buttons.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>components/cards.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>components/stats.css">

<!-- ==========================================
PAGES
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/hero.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/home.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/booking.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/events.css">
<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/contact.css">
<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/our-story.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>pages/booking-ui.css">

<!-- ==========================================
SECTIONS
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/about.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/why-tdogs.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/spa-menu.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/booking-journey.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/gallery.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/testimonials.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/cta.css">
<link
    rel="stylesheet"
    href="<?= $cssPath ?>sections/featured-events.css">

<!-- ==========================================
EFFECTS
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>effects/background.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>effects/floating.css">

<!-- ==========================================
UTILITIES
========================================== -->

<link
    rel="stylesheet"
    href="<?= $cssPath ?>utilities/helpers.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>utilities/animations.css">

<link
    rel="stylesheet"
    href="<?= $cssPath ?>utilities/responsive.css">

</head>

<body>