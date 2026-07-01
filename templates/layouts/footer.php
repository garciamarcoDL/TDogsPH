<?php

$contacts = require __DIR__ . '/../../app/Data/contact.php';

$directContacts = [];

$socialContacts = [];

foreach ($contacts as $contact) {

    if (in_array($contact['title'], ['Telephone', 'Email'])) {

        $directContacts[] = $contact;

    } else {

        $socialContacts[] = $contact;

    }

}

?>

<footer class="footer-section">

    <div class="container">

        <div class="row gy-5">

            <!-- ==========================================
                 BRAND
            ========================================== -->

            <div class="col-lg-4">

                <div class="footer-brand">

                    <img
                        src="<?= $imagePath ?>hero/dog.png"
                        alt="TDogsPH Logo"
                        class="footer-logo floating-logo">

                    <span class="footer-title">

                        TDogsPH

                    </span>

                </div>

                <p class="footer-description">

                    Premium Pet Grooming & Spa dedicated to giving every furry family member a luxurious, stress-free grooming experience through professional care, patience, and love.

                </p>

            </div>

            <!-- ==========================================
                 EXPLORE
            ========================================== -->

            <div class="col-lg-2">

                <h5>

                    Explore

                </h5>

                <ul class="list-unstyled footer-links">

                    <li><a href="<?= $basePath ?>index.php#home">Home</a></li>

                    <li><a href="<?= $basePath ?>our-story/">Our Story</a></li>

                    <li><a href="<?= $basePath ?>events/">Events</a></li>

                    <li><a href="<?= $basePath ?>contact/">Contact</a></li>

                    <li><a href="<?= $basePath ?>booking/">Book Appointment</a></li>

                </ul>

            </div>

            <!-- ==========================================
                 CONTACT
            ========================================== -->

            <div class="col-lg-3">

                <h5>

                    Contact

                </h5>

                <div class="footer-contact-list">

                    <?php foreach($directContacts as $contact): ?>

                        <a
                            href="<?= htmlspecialchars($contact['link']); ?>"
                            class="footer-contact-item"
                            target="_blank">

                            <img
                                src="<?= $imagePath ?>contact/<?= htmlspecialchars($contact['icon']); ?>"
                                alt="<?= htmlspecialchars($contact['title']); ?>">

                            <div>

                                <strong>

                                    <?= htmlspecialchars($contact['title']); ?>

                                </strong>

                                <span>

                                    <?= htmlspecialchars($contact['value']); ?>

                                </span>

                            </div>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>

            <!-- ==========================================
                 FOLLOW US
            ========================================== -->

            <div class="col-lg-3">

                <h5>

                    Follow Us

                </h5>

                <div class="footer-contact-list">

                    <?php foreach($socialContacts as $contact): ?>

                        <a
                            href="<?= htmlspecialchars($contact['link']); ?>"
                            class="footer-contact-item"
                            target="_blank">

                            <img
                                src="<?= $imagePath ?>contact/<?= htmlspecialchars($contact['icon']); ?>"
                                alt="<?= htmlspecialchars($contact['title']); ?>">

                            <div>

                                <strong>

                                    <?= htmlspecialchars($contact['title']); ?>

                                </strong>

                                <span>

                                    <?= htmlspecialchars($contact['value']); ?>

                                </span>

                            </div>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

        <hr class="footer-divider">

        <div class="row align-items-center">

            <div class="col-md-6 text-center text-md-start">

                <small>

                    © <?= date('Y'); ?> TDogsPH. All Rights Reserved.

                </small>

            </div>

            <div class="col-md-6 text-center text-md-end">

                <small>

                    Made with ❤️ in the Philippines.

                </small>

            </div>

        </div>

    </div>

</footer>

<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main -->

<script src="<?= $jsPath ?>main.js"></script>

<!-- Booking -->

<script src="<?= $jsPath ?>booking/controller.js"></script>
<script src="<?= $jsPath ?>booking/schedule.js"></script>
<script src="<?= $jsPath ?>booking/review.js"></script>
<script src="<?= $jsPath ?>booking/pet.js"></script>
<script src="<?= $jsPath ?>booking/owner.js"></script>
<script src="<?= $jsPath ?>booking/validation.js"></script>

<!-- Effects -->

<script src="<?= $jsPath ?>home/reflection.js"></script>
<script src="<?= $jsPath ?>events/navigation.js"></script>
<script src="<?= $jsPath ?>effects/background.js"></script>

</body>

</html>