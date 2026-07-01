<?php

$isHomePage = ($currentPage === 'index.php');

$isOurStoryPage = ($currentPage === 'our-story.php');

$isEventsPage = ($currentPage === 'events.php');

$homeUrl = $basePath . 'index.php';

$ourStoryUrl = $basePath . 'our-story/';

$eventsUrl = $basePath . 'events/';

$bookingUrl = $basePath . 'booking/';

?>

<nav class="navbar navbar-expand-lg fixed-top tdogs-navbar">

    <div class="container">

        <!-- ==========================================
             BRAND
        ========================================== -->

        <a
            class="navbar-brand"
            href="<?= $homeUrl; ?>"
            aria-label="TDogsPH Home">

            <img
                src="<?= $imagePath ?>hero/dog.png"
                alt="TDogsPH Logo"
                class="nav-logo floating-logo">

            <span class="logo-text">

                TDogsPH

            </span>

        </a>

        <!-- ==========================================
             MOBILE TOGGLER
        ========================================== -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <i class="fas fa-bars"></i>

        </button>

        <!-- ==========================================
             MENU
        ========================================== -->

        <div
            class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a
                        class="nav-link <?= $isHomePage ? 'active' : ''; ?>"
                        href="<?= $homeUrl ?>#home">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link <?= $isOurStoryPage ? 'active' : ''; ?>"
                        href="<?= $ourStoryUrl; ?>">

                        Our Story

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="<?= $homeUrl ?>#spa-menu">

                        Services

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link <?= $isEventsPage ? 'active' : ''; ?>"
                        href="<?= $eventsUrl; ?>">

                        Events

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="<?= $homeUrl ?>#gallery">

                        Gallery

                    </a>

                </li>

            </ul>

            <!-- ==========================================
                 ACTIONS
            ========================================== -->

            <div class="navbar-actions">

                <a
                    href="#"
                    class="login-btn">

                    Login

                </a>

                <a
                    href="<?= $bookingUrl; ?>"
                    class="book-btn">

                    <i class="fas fa-paw me-2"></i>

                    Book Now

                </a>

            </div>

        </div>

    </div>

</nav>