/*
|--------------------------------------------------------------------------
| TDogsPH Reflection Section
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const section = document.querySelector(".reflection-section");

    if (!section) return;

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                section.classList.add("show");

                observer.unobserve(section);

            }

        });

    }, {

        threshold: 0.25

    });

    observer.observe(section);

});