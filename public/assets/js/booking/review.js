/*
|--------------------------------------------------------------------------
| TDogsPH Review Controller
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const review = {

        service: document.getElementById("review-service"),
        date: document.getElementById("review-date"),
        time: document.getElementById("review-time"),
        arrival: document.getElementById("review-arrival"),

        petName: document.getElementById("review-pet-name"),
        petType: document.getElementById("review-pet-type"),
        petBreed: document.getElementById("review-pet-breed"),
        petWeight: document.getElementById("review-pet-weight"),

        ownerName: document.getElementById("review-owner-name"),
        ownerPhone: document.getElementById("review-owner-phone"),
        ownerEmail: document.getElementById("review-owner-email"),
        ownerContact: document.getElementById("review-owner-contact"),

        pickupAddress: document.getElementById("review-pickup-address"),
        landmark: document.getElementById("review-landmark"),
        notes: document.getElementById("review-notes")

    };

    window.updateReview = function () {

        if (!window.booking) return;

        review.service.textContent =
            booking.service.name || "--";

        review.date.textContent =
            booking.schedule.date || "--";

        review.time.textContent =
            booking.schedule.time || "--";

        review.arrival.textContent =
            booking.schedule.arrival || "Drop Off";

        review.petName.textContent =
            booking.pet.name || "--";

        review.petType.textContent =
            booking.pet.type || "--";

        review.petBreed.textContent =
            booking.pet.breed || "--";

        review.petWeight.textContent =
            booking.pet.weight || "--";

        review.ownerName.textContent =
            booking.owner.name || "--";

        review.ownerPhone.textContent =
            booking.owner.phone || "--";

        review.ownerEmail.textContent =
            booking.owner.email || "--";

        review.ownerContact.textContent =
            booking.owner.contactMethod || "--";

        review.pickupAddress.textContent =
            booking.owner.pickupAddress || "N/A";

        review.landmark.textContent =
            booking.owner.landmark || "N/A";

        review.notes.textContent =
            booking.pet.notes || "None";

    };

});