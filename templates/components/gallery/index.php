<?php

$gallery = require __DIR__ . '/../../../app/Data/gallery.php';

?>

<section
    id="gallery"
    class="gallery-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">

                Happy Tails

            </span>

            <h2>

                Every Grooming Tells A Story

            </h2>

            <p class="section-description">

                Every visit creates a new memory. From luxurious spa treatments and stylish makeovers to birthday celebrations and heartwarming moments, discover why pet families love TDogsPH.

            </p>

        </div>

        <div class="gallery-grid">

            <?php foreach($gallery as $item): ?>

                <div class="gallery-card <?= htmlspecialchars($item['size']); ?>">

                    <div class="gallery-image">

                        <img
                            src="<?= htmlspecialchars($item['image']); ?>"
                            alt="<?= htmlspecialchars($item['title']); ?>">

                        <?php if($item['featured']): ?>

                            <span class="featured-tag">

                                Featured

                            </span>

                        <?php endif; ?>

                        <?php if($item['instagram']): ?>

                            <span class="instagram-tag">

                                <i class="fab fa-instagram"></i>

                            </span>

                        <?php endif; ?>

                        <div class="gallery-overlay">

                            <span class="gallery-category">

                                <?= htmlspecialchars($item['category']); ?>

                            </span>

                            <h4>

                                <?= htmlspecialchars($item['title']); ?>

                            </h4>

                            <p>

                                <?= htmlspecialchars($item['description']); ?>

                            </p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <div class="gallery-footer text-center mt-5">

            <a
                href="#"
                class="btn-primary-custom">

                View Full Gallery

            </a>

        </div>

    </div>

</section>