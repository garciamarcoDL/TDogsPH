<?php

$services = require __DIR__ . '/../../../app/Data/services.php';

?>

<section
    id="spa-menu"
    class="spa-menu">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">

                Luxury Grooming Services

            </span>

            <h2>

                Tailored Care For Every Pet

            </h2>

            <p class="section-description">

                Every grooming experience is thoughtfully designed to provide comfort, safety, and exceptional care for your beloved companion.

            </p>

        </div>

        <div class="row g-4">

            <?php foreach($services as $service): ?>

            <div class="col-lg-4 col-md-6">

                <div class="spa-card <?= $service['featured'] ? 'featured-service' : ''; ?>">

                    <div class="spa-image">

                        <img
                            src="<?= $imagePath . $service['image']; ?>"
                            alt="<?= htmlspecialchars($service['title']); ?>">

                        <span class="service-badge">

                            <?= htmlspecialchars($service['badge']); ?>

                        </span>

                    </div>

                    <div class="spa-content">

                        <small class="service-subtitle">

                            <?= htmlspecialchars($service['subtitle']); ?>

                        </small>

                        <h3>

                            <?= htmlspecialchars($service['title']); ?>

                        </h3>

                        <div class="service-rating">

                            ⭐ <?= $service['rating']; ?>

                            <span>

                                <?= htmlspecialchars($service['reviews']); ?>

                            </span>

                        </div>

                        <p>

                            <?= htmlspecialchars($service['description']); ?>

                        </p>

                        <div class="service-footer">

                            <div>

                                <small>

                                    Starting From

                                </small>

                                <strong>

                                    ₱<?= number_format($service['price']); ?>

                                </strong>

                            </div>

                            <div>

                                <small>

                                    Duration

                                </small>

                                <strong>

                                    <?= htmlspecialchars($service['duration']); ?>

                                </strong>

                            </div>

                        </div>

                        <a
                            href="<?= $bookingUrl; ?>"
                            class="reserve-btn">

                            <?= htmlspecialchars($service['button']); ?>

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>