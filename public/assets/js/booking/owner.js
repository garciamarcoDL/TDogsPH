/*
|--------------------------------------------------------------------------
| TDogsPH Owner Controller
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const fields = {

        name: document.getElementById("owner-name"),
        phone: document.getElementById("owner-phone"),
        email: document.getElementById("owner-email"),
        contactMethod: document.getElementById("preferred-contact"),

        emergencyName: document.getElementById("emergency-name"),
        emergencyPhone: document.getElementById("emergency-phone"),

        arrivalMethod: document.querySelectorAll(".arrival-card"),

        pickupContact: document.getElementById("pickup-contact"),
        pickupPhone: document.getElementById("pickup-phone"),
        pickupAddress: document.getElementById("pickup-address"),
        pickupLandmark: document.getElementById("pickup-landmark"),
        pickupNotes: document.getElementById("pickup-notes")

    };

    function updateOwner() {

        if (!window.booking) return;

        booking.owner.name =
            fields.name?.value.trim() || "";

        booking.owner.phone =
            fields.phone?.value.trim() || "";

        booking.owner.email =
            fields.email?.value.trim() || "";

        booking.owner.contactMethod =
            fields.contactMethod?.value || "";

        booking.owner.emergencyName =
            fields.emergencyName?.value.trim() || "";

        booking.owner.emergencyPhone =
            fields.emergencyPhone?.value.trim() || "";

        booking.owner.pickupContact =
            fields.pickupContact?.value.trim() || "";

        booking.owner.pickupPhone =
            fields.pickupPhone?.value.trim() || "";

        booking.owner.pickupAddress =
            fields.pickupAddress?.value.trim() || "";

        booking.owner.landmark =
            fields.pickupLandmark?.value.trim() || "";

        booking.owner.pickupNotes =
            fields.pickupNotes?.value.trim() || "";

        const activeArrival = document.querySelector(".arrival-card.active");

        booking.schedule.arrival = activeArrival
            ? activeArrival.dataset.arrival
            : "dropoff";

        if (typeof updateSummary === "function") {

            updateSummary();

        }

        if (typeof updateReview === "function") {

            updateReview();

        }

        console.log("Owner Updated");

        console.log(booking.owner);

    }

    [
        fields.name,
        fields.phone,
        fields.email,
        fields.contactMethod,
        fields.emergencyName,
        fields.emergencyPhone,
        fields.pickupContact,
        fields.pickupPhone,
        fields.pickupAddress,
        fields.pickupLandmark,
        fields.pickupNotes
    ].forEach(field => {

        if (!field) return;

        field.addEventListener("input", updateOwner);

        field.addEventListener("change", updateOwner);

    });

    fields.arrivalMethod.forEach(card => {

        card.addEventListener("click", () => {

            setTimeout(updateOwner, 100);

        });

    });

});