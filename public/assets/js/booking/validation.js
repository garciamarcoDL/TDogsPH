/*
|--------------------------------------------------------------------------
| TDogsPH Booking Validation
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const button = document.getElementById("confirm-booking");

    if (!button) return;

    button.addEventListener("click", validateBooking);

});

function validateBooking() {

    const errors = [];

    /*
    |--------------------------------------------------------------------------
    | SERVICE
    |--------------------------------------------------------------------------
    */

    if (!booking.service.name) {

        errors.push("Please select a grooming service.");

    }

    /*
    |--------------------------------------------------------------------------
    | DATE
    |--------------------------------------------------------------------------
    */

    if (!booking.schedule.date) {

        errors.push("Please select an appointment date.");

    }

    /*
    |--------------------------------------------------------------------------
    | TIME
    |--------------------------------------------------------------------------
    */

    if (!booking.schedule.time) {

        errors.push("Please select an appointment time.");

    }

    /*
    |--------------------------------------------------------------------------
    | PET
    |--------------------------------------------------------------------------
    */

    if (!booking.pet.name) {

        errors.push("Please enter your pet's name.");

    }

    if (!booking.pet.type) {

        errors.push("Please select your pet type.");

    }

    if (!booking.pet.breed) {

        errors.push("Please enter your pet's breed.");

    }

    /*
    |--------------------------------------------------------------------------
    | OWNER
    |--------------------------------------------------------------------------
    */

    if (!booking.owner.name) {

        errors.push("Please enter your full name.");

    }

    if (!booking.owner.phone) {

        errors.push("Please enter your mobile number.");

    }

    if (!booking.owner.email) {

        errors.push("Please enter your email address.");

    }

    /*
    |--------------------------------------------------------------------------
    | TERMS
    |--------------------------------------------------------------------------
    */

    const terms = document.getElementById("termsAgreement");

    if (!terms.checked) {

        errors.push("Please accept the Terms & Conditions.");

    }

    /*
    |--------------------------------------------------------------------------
    | RESULT
    |--------------------------------------------------------------------------
    */

    if (errors.length > 0) {

        alert(errors.join("\n"));

        return;

    }

    alert("Validation Successful!");

}