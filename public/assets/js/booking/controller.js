/*
|--------------------------------------------------------------------------
| TDogsPH Booking State Manager
|--------------------------------------------------------------------------
*/

window.booking = {

    service: {

        id: "",
        name: "",
        price: "",
        duration: ""

    },

    schedule: {

        date: "",
        time: "",
        arrival: "Drop Off"

    },

    pet: {

        name: "",
        type: "",
        breed: "",
        age: "",
        weight: "",
        gender: "",
        color: "",
        size: "",
        haircut: "",
        lastGroomed: "",
        notes: "",

        health: {}

    },

    owner: {

        name: "",
        phone: "",
        email: "",
        contactMethod: "",

        emergencyName: "",
        emergencyPhone: "",

        pickupContact: "",
        pickupPhone: "",
        pickupAddress: "",
        landmark: "",
        pickupNotes: ""

    }

};

/*
|--------------------------------------------------------------------------
| SUMMARY ELEMENTS
|--------------------------------------------------------------------------
*/

const summary = {

    service: document.getElementById("summary-service"),
    date: document.getElementById("summary-date"),
    time: document.getElementById("summary-time"),
    pet: document.getElementById("summary-pet"),
    price: document.getElementById("summary-price"),
    duration: document.getElementById("summary-duration")

};

/*
|--------------------------------------------------------------------------
| REVIEW ELEMENTS
|--------------------------------------------------------------------------
*/

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

/*
|--------------------------------------------------------------------------
| UPDATE SUMMARY
|--------------------------------------------------------------------------
*/

window.updateSummary = function () {

    if(summary.service)
        summary.service.textContent = booking.service.name || "Not Selected";

    if(summary.date)
        summary.date.textContent = booking.schedule.date || "--";

    if(summary.time)
        summary.time.textContent = booking.schedule.time || "--";

    if(summary.pet)
        summary.pet.textContent = booking.pet.name || "--";

    if(summary.price)
        summary.price.textContent = booking.service.price || "--";

    if(summary.duration)
        summary.duration.textContent = booking.service.duration || "--";

};

/*
|--------------------------------------------------------------------------
| UPDATE REVIEW
|--------------------------------------------------------------------------
*/

window.updateReview = function () {

    if(review.service)
        review.service.textContent = booking.service.name || "--";

    if(review.date)
        review.date.textContent = booking.schedule.date || "--";

    if(review.time)
        review.time.textContent = booking.schedule.time || "--";

    if(review.arrival)
        review.arrival.textContent = booking.schedule.arrival || "Drop Off";

    if(review.petName)
        review.petName.textContent = booking.pet.name || "--";

    if(review.petType)
        review.petType.textContent = booking.pet.type || "--";

    if(review.petBreed)
        review.petBreed.textContent = booking.pet.breed || "--";

    if(review.petWeight)
        review.petWeight.textContent = booking.pet.weight || "--";

    if(review.ownerName)
        review.ownerName.textContent = booking.owner.name || "--";

    if(review.ownerPhone)
        review.ownerPhone.textContent = booking.owner.phone || "--";

    if(review.ownerEmail)
        review.ownerEmail.textContent = booking.owner.email || "--";

    if(review.ownerContact)
        review.ownerContact.textContent = booking.owner.contactMethod || "--";

    if(review.pickupAddress)
        review.pickupAddress.textContent =
            booking.owner.pickupAddress || "N/A";

    if(review.landmark)
        review.landmark.textContent =
            booking.owner.landmark || "N/A";

    if(review.notes)
        review.notes.textContent =
            booking.pet.notes || "None";

};

/*
|--------------------------------------------------------------------------
| SERVICE SELECTION
|--------------------------------------------------------------------------
*/

document.querySelectorAll(".service-card").forEach(card => {

    card.addEventListener("click", () => {

        document
            .querySelectorAll(".service-card")
            .forEach(item => item.classList.remove("selected"));

        card.classList.add("selected");

        booking.service.id = card.dataset.service;

        booking.service.name =
            card.querySelector("h4").textContent.trim();

        booking.service.price =
            card.querySelector(".service-price").textContent.trim();

        booking.service.duration =
            card.querySelector(".service-duration").textContent.trim();

        updateSummary();

        updateReview();

    });

});

/*
|--------------------------------------------------------------------------
| INITIALIZE
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    updateSummary();

    updateReview();

});