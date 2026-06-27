<?php

$gallery = require __DIR__ . '/../../../app/Data/gallery.php';

?>

<section id="gallery" class="gallery-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">
                Happy Tails
            </span>

            <h2>
                Every Grooming Tells A Story
            </h2>

            <p class="section-description">
                Take a look at some of our happy furry clients after their
                TDogs spa experience.
            </p>

        </div>

        <div class="row g-4">

            <?php foreach($gallery as $item): ?>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-card">

                        <div class="gallery-image">

                            <img
                                src="<?= htmlspecialchars($item['image']); ?>"
                                alt="<?= htmlspecialchars($item['title']); ?>">

                            <div class="gallery-overlay">

                                <span class="gallery-category">

                                    <?= htmlspecialchars($item['category']); ?>

                                </span>

                                <h4>

                                    <?= htmlspecialchars($item['title']); ?>

                                </h4>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>