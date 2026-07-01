<section
    id="upcoming-events"
    class="events-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">

                Upcoming Event

            </span>

            <h2>

                Don't Miss Our Next Big Celebration

            </h2>

            <p class="section-description">

                Join fellow pet lovers for a day filled with fun activities, memorable experiences, and exciting surprises for every furry guest.

            </p>

        </div>

        <div class="featured-event">

            <div class="row align-items-center g-0">

                <div class="col-lg-5">

                    <div class="featured-event-image">

                        <img
                            src="<?= $eventBanner; ?>"
                            alt="<?= $eventTitle; ?>"
                            class="img-fluid">

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="featured-event-content">

                        <span class="featured-badge">

                            Featured Event

                        </span>

                        <h3>

                            <?= $eventTitle; ?>

                        </h3>

                        <p>

                            A full day of exciting games, pet competitions, birthday celebrations, professional photography, giveaways, delicious treats, and unforgettable memories for every member of the family.

                        </p>

                        <div class="featured-meta">

                            <div>

                                <i class="far fa-calendar"></i>

                                <?= $eventDate; ?>

                            </div>

                            <div>

                                <i class="far fa-clock"></i>

                                <?= $eventTime; ?>

                            </div>

                            <div>

                                <i class="fas fa-location-dot"></i>

                                <?= $eventLocation; ?>

                            </div>

                        </div>

                        <div class="mt-4">

                            <a
                                href="<?= $bookingUrl; ?>"
                                class="btn-primary-custom">

                                Reserve Your Spot

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>