/* ==========================================
   NAVBAR SCROLL
========================================== */

window.addEventListener("scroll", () => {

    const nav = document.querySelector(".tdogs-navbar");

    if (!nav) return;

    if (window.scrollY > 40) {

        nav.classList.add("scrolled");

    } else {

        nav.classList.remove("scrolled");

    }

});

/* ==========================================
   BOOKING SERVICE SELECTION
========================================== */

document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".service-card");

    if (!cards.length) return;

    cards.forEach(card => {

        card.addEventListener("click", () => {

            cards.forEach(item => {

                item.classList.remove("selected");

            });

            card.classList.add("selected");

            const selectedService = card.dataset.service;

            localStorage.setItem("selectedService", selectedService);

        });

    });

});