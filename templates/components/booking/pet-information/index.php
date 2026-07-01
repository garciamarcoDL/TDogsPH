<section id="pet-information" class="booking-section">

    <div class="container">

        <div class="booking-card">

            <div class="text-center mb-5">

                <span class="section-tag">

                    Step 4

                </span>

                <h2>

                    Tell Us About Your Pet

                </h2>

                <p class="section-description">

                    Help us provide the safest, most comfortable, and personalized grooming experience for your beloved pet.

                </p>

            </div>

            <!-- ==========================================
                 BASIC INFORMATION
            ========================================== -->

            <div class="row g-4">

                <div class="col-md-6">

                    <label for="pet-name" class="form-label">

                        Pet Name *

                    </label>

                    <input
                        id="pet-name"
                        type="text"
                        class="form-control booking-input"
                        placeholder="e.g. Mochi">

                </div>

                <div class="col-md-6">

                    <label for="pet-type" class="form-label">

                        Pet Type *

                    </label>

                    <select
                        id="pet-type"
                        class="form-select booking-input">

                        <option value="" selected disabled>

                            Select Pet Type

                        </option>

                        <option value="Dog">

                            Dog

                        </option>

                        <option value="Cat">

                            Cat

                        </option>

                    </select>

                </div>

                <div class="col-md-6">

                    <label for="pet-breed" class="form-label">

                        Breed *

                    </label>

                    <input
                        id="pet-breed"
                        type="text"
                        class="form-control booking-input"
                        placeholder="e.g. Shih Tzu">

                </div>

                <div class="col-md-3">

                    <label for="pet-age" class="form-label">

                        Age

                    </label>

                    <input
                        id="pet-age"
                        type="number"
                        min="0"
                        class="form-control booking-input"
                        placeholder="Years">

                </div>

                <div class="col-md-3">

                    <label for="pet-weight" class="form-label">

                        Weight

                    </label>

                    <input
                        id="pet-weight"
                        type="text"
                        class="form-control booking-input"
                        placeholder="e.g. 6 kg">

                </div>

                <div class="col-md-6">

                    <label for="pet-gender" class="form-label">

                        Gender

                    </label>

                    <select
                        id="pet-gender"
                        class="form-select booking-input">

                        <option value="" selected disabled>

                            Select Gender

                        </option>

                        <option value="Male">

                            Male

                        </option>

                        <option value="Female">

                            Female

                        </option>

                    </select>

                </div>

                <div class="col-md-6">

                    <label for="pet-color" class="form-label">

                        Coat Color

                    </label>

                    <input
                        id="pet-color"
                        type="text"
                        class="form-control booking-input"
                        placeholder="e.g. White & Brown">

                </div>

                <div class="col-md-6">

                    <label for="pet-size" class="form-label">

                        Size

                    </label>

                    <select
                        id="pet-size"
                        class="form-select booking-input">

                        <option value="" selected disabled>

                            Select Size

                        </option>

                        <option value="Small">

                            Small

                        </option>

                        <option value="Medium">

                            Medium

                        </option>

                        <option value="Large">

                            Large

                        </option>

                        <option value="Giant">

                            Giant

                        </option>

                    </select>

                </div>

            </div>

            <hr class="my-5">

            <!-- ==========================================
                 HEALTH INFORMATION
            ========================================== -->

            <h4 class="mb-4">

                Health & Grooming Information

            </h4>

            <div class="row g-3">

                <div class="col-lg-4">

                    <div class="form-check">

                        <input
                            id="vaccinated"
                            class="form-check-input"
                            type="checkbox">

                        <label
                            class="form-check-label"
                            for="vaccinated">

                            Vaccinated

                        </label>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-check">

                        <input
                            id="friendly"
                            class="form-check-input"
                            type="checkbox">

                        <label
                            class="form-check-label"
                            for="friendly">

                            Friendly with People

                        </label>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-check">

                        <input
                            id="friendly-pets"
                            class="form-check-input"
                            type="checkbox">

                        <label
                            class="form-check-label"
                            for="friendly-pets">

                            Friendly with Other Pets

                        </label>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-check">

                        <input
                            id="allergy"
                            class="form-check-input"
                            type="checkbox">

                        <label
                            class="form-check-label"
                            for="allergy">

                            Has Allergies

                        </label>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-check">

                        <input
                            id="sensitive"
                            class="form-check-input"
                            type="checkbox">

                        <label
                            class="form-check-label"
                            for="sensitive">

                            Sensitive Skin

                        </label>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-check">

                        <input
                            id="medical-condition"
                            class="form-check-input"
                            type="checkbox">

                        <label
                            class="form-check-label"
                            for="medical-condition">

                            Medical Condition

                        </label>

                    </div>

                </div>

            </div>

            <hr class="my-5">

            <!-- ==========================================
                 GROOMING PREFERENCES
            ========================================== -->

            <div class="row g-4">

                <div class="col-md-6">

                    <label for="last-groomed" class="form-label">

                        Last Grooming Date

                    </label>

                    <input
                        id="last-groomed"
                        type="date"
                        class="form-control booking-input">

                </div>

                <div class="col-md-6">

                    <label for="haircut-style" class="form-label">

                        Preferred Haircut

                    </label>

                    <input
                        id="haircut-style"
                        type="text"
                        class="form-control booking-input"
                        placeholder="Teddy Bear Cut, Summer Cut, etc.">

                </div>

            </div>

            <div class="mt-5">

                <label
                    for="pet-notes"
                    class="form-label">

                    Special Grooming Instructions

                </label>

                <textarea
                    id="pet-notes"
                    class="form-control booking-input"
                    rows="6"
                    placeholder="Tell us anything you'd like our groomers to know. Example: nervous around dryers, aggressive during nail trimming, first grooming session, allergies, medications, recent surgery, preferred haircut, or anything important."></textarea>

            </div>

        </div>

    </div>

</section>