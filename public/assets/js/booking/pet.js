/*
|--------------------------------------------------------------------------
| TDogsPH Pet Controller
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const fields = {

        name: document.getElementById("pet-name"),
        type: document.getElementById("pet-type"),
        breed: document.getElementById("pet-breed"),
        age: document.getElementById("pet-age"),
        weight: document.getElementById("pet-weight"),
        gender: document.getElementById("pet-gender"),
        color: document.getElementById("pet-color"),
        size: document.getElementById("pet-size"),
        lastGroomed: document.getElementById("last-groomed"),
        haircut: document.getElementById("haircut-style"),
        notes: document.getElementById("pet-notes"),

        vaccinated: document.getElementById("vaccinated"),
        friendly: document.getElementById("friendly"),
        friendlyPets: document.getElementById("friendly-pets"),
        allergy: document.getElementById("allergy"),
        sensitive: document.getElementById("sensitive"),
        medical: document.getElementById("medical-condition")

    };

    function updatePet() {

        if (!window.booking) return;

        booking.pet.name = fields.name?.value.trim() || "";
        booking.pet.type = fields.type?.value || "";
        booking.pet.breed = fields.breed?.value.trim() || "";
        booking.pet.age = fields.age?.value || "";
        booking.pet.weight = fields.weight?.value.trim() || "";
        booking.pet.gender = fields.gender?.value || "";

        booking.pet.color = fields.color?.value.trim() || "";
        booking.pet.size = fields.size?.value || "";

        booking.pet.lastGroomed = fields.lastGroomed?.value || "";
        booking.pet.haircut = fields.haircut?.value.trim() || "";

        booking.pet.notes = fields.notes?.value.trim() || "";

        booking.pet.health = {

            vaccinated: fields.vaccinated?.checked || false,
            friendly: fields.friendly?.checked || false,
            friendlyPets: fields.friendlyPets?.checked || false,
            allergy: fields.allergy?.checked || false,
            sensitive: fields.sensitive?.checked || false,
            medical: fields.medical?.checked || false

        };

        if (typeof updateSummary === "function") {

            updateSummary();

        }

        if (typeof updateReview === "function") {

            updateReview();

        }

    }

    Object.values(fields).forEach(field => {

        if (!field) return;

        field.addEventListener("input", updatePet);

        field.addEventListener("change", updatePet);

    });

});