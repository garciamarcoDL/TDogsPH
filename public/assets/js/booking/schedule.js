/*
|--------------------------------------------------------------------------
| TDogsPH Schedule Controller
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    /*
    |--------------------------------------------------------------------------
    | DATE
    |--------------------------------------------------------------------------
    */

    const appointmentDate = document.getElementById("appointment-date");

    if (appointmentDate) {

        const today = new Date();

        today.setHours(0, 0, 0, 0);

        appointmentDate.min = today.toISOString().split("T")[0];

        appointmentDate.addEventListener("change", () => {

            booking.schedule.date = appointmentDate.value;

            updateSummary();

            updateReview();

        });

    }

    /*
    |--------------------------------------------------------------------------
    | TIME SLOT
    |--------------------------------------------------------------------------
    */

    const timeSlots = document.querySelectorAll(".time-slot");

    timeSlots.forEach(slot => {

        slot.addEventListener("click", () => {

            timeSlots.forEach(button => {

                button.classList.remove("active");

            });

            slot.classList.add("active");

            booking.schedule.time = slot.dataset.time;

            updateSummary();

            updateReview();

        });

    });

    /*
    |--------------------------------------------------------------------------
    | ARRIVAL METHOD
    |--------------------------------------------------------------------------
    */

    const arrivalCards = document.querySelectorAll(".arrival-card");

    const pickupSection = document.getElementById("pickup-information");

    arrivalCards.forEach(card => {

        card.addEventListener("click", () => {

            arrivalCards.forEach(item => {

                item.classList.remove("active");

            });

            card.classList.add("active");

            const arrival = card.dataset.arrival;

            booking.schedule.arrival =
                arrival === "pickup"
                    ? "Pick Up Service"
                    : "Drop Off";

            if (pickupSection) {

                if (arrival === "pickup") {

                    pickupSection.classList.remove("d-none");

                } else {

                    pickupSection.classList.add("d-none");

                }

            }

            updateSummary();

            updateReview();

        });

    });

});