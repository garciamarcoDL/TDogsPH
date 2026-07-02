<section id="booking-schedule" class="booking-section">

    <div class="container">

        <div class="booking-card">

            <!-- ==========================================
                 STEP 2
            ========================================== -->

            <div class="text-center mb-5">

                <span class="section-tag">

                    Step 2

                </span>

                <h2>

                    Choose Your Appointment

                </h2>

                <p class="section-description">

                    Select your preferred appointment date and available time.
                    We are open Monday through Sunday from 8:00 AM to 8:00 PM.

                </p>

            </div>

            <div class="row g-5">

                <!-- DATE -->

                <div class="col-lg-4">

                    <label
                        for="appointment-date"
                        class="form-label">

                        Preferred Date

                    </label>

                    <input
                        id="appointment-date"
                        type="date"
                        class="form-control booking-input"
                        required>

                    <small class="text-muted d-block mt-2">

                        Monday – Sunday

                    </small>

                </div>

                <!-- TIME -->

                <div class="col-lg-8">

                    <label class="form-label">

                        Available Time Slots

                    </label>

                    <div class="time-slots">

                        <?php

                        $times = [

                            "8:00 AM",
                            "9:00 AM",
                            "10:00 AM",
                            "11:00 AM",
                            "12:00 PM",
                            "1:00 PM",
                            "2:00 PM",
                            "3:00 PM",
                            "4:00 PM",
                            "5:00 PM",
                            "6:00 PM",
                            "7:00 PM",
                            "8:00 PM"

                        ];

                        foreach ($times as $time):

                        ?>

                        <button
                            type="button"
                            class="time-slot"
                            data-time="<?= $time; ?>">

                            <span class="time-slot-bg"></span>

                            <span class="time-slot-text">

                                <?= $time; ?>

                            </span>

                        </button>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

            <hr class="my-5">

            <!-- ==========================================
                 STEP 3
            ========================================== -->

            <div class="text-center mb-5">

                <span class="section-tag">

                    Step 3

                </span>

                <h2>

                    Arrival Method

                </h2>

                <p class="section-description">

                    Choose whether you'll bring your pet to our salon or let us pick them up.

                </p>

            </div>

            <div class="row g-4">

                <!-- DROP OFF -->

                <div class="col-lg-6">

                    <div
                        class="arrival-card active"
                        data-arrival="dropoff">

                        <div class="arrival-icon">

                            <i class="fas fa-car-side"></i>

                        </div>

                        <h4>

                            Drop Off

                        </h4>

                        <p>

                            Bring your pet directly to TDogsPH at your scheduled appointment.

                        </p>

                    </div>

                </div>

                <!-- PICKUP -->

                <div class="col-lg-6">

                    <div
                        class="arrival-card"
                        data-arrival="pickup">

                        <div class="arrival-icon">

                            <i class="fas fa-truck"></i>

                        </div>

                        <h4>

                            Pick Up Service

                        </h4>

                        <p>

                            We will pick up your pet from your preferred location.

                            Additional transportation fees may apply.

                        </p>

                    </div>

                </div>

            </div>

            <!-- PICKUP INFORMATION -->

            <div
                id="pickup-information"
                class="pickup-section d-none mt-5">

                <hr class="mb-5">

                <h3>

                    Pickup Information

                </h3>

                <p class="section-description mb-4">

                    Please provide the pickup details for your pet.

                </p>

                <div class="row g-4">

                    <div class="col-md-6">

                        <label
                            for="pickup-contact"
                            class="form-label">

                            Contact Person

                        </label>

                        <input
                            id="pickup-contact"
                            type="text"
                            class="form-control booking-input">

                    </div>

                    <div class="col-md-6">

                        <label
                            for="pickup-phone"
                            class="form-label">

                            Mobile Number

                        </label>

                        <input
                            id="pickup-phone"
                            type="tel"
                            class="form-control booking-input">

                    </div>

                    <div class="col-12">

                        <label
                            for="pickup-address"
                            class="form-label">

                            Complete Address

                        </label>

                        <textarea
                            id="pickup-address"
                            rows="4"
                            class="form-control booking-input"
                            placeholder="House No., Street, Barangay, City, Province"></textarea>

                    </div>

                    <div class="col-md-6">

                        <label
                            for="pickup-landmark"
                            class="form-label">

                            Landmark

                        </label>

                        <input
                            id="pickup-landmark"
                            type="text"
                            class="form-control booking-input"
                            placeholder="Nearest landmark">

                    </div>

                    <div class="col-md-6">

                        <label
                            for="pickup-notes"
                            class="form-label">

                            Pickup Instructions

                        </label>

                        <input
                            id="pickup-notes"
                            type="text"
                            class="form-control booking-input"
                            placeholder="Gate code, parking, etc.">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>