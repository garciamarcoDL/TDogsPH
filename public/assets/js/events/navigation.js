/*
|--------------------------------------------------------------------------
| TDogsPH Events Navigation
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const navLinks = document.querySelectorAll(".events-nav-item");

    const sections = document.querySelectorAll(
        "#upcoming-events, #birthday-celebrations, #pet-photography, #pet-cakes"
    );

    if (!navLinks.length || !sections.length) return;

    /*
    |--------------------------------------------------------------------------
    | Smooth Scroll
    |--------------------------------------------------------------------------
    */

    navLinks.forEach(link => {

        link.addEventListener("click", function(e){

            e.preventDefault();

            const target = document.querySelector(this.getAttribute("href"));

            if(!target) return;

            window.scrollTo({

                top: target.offsetTop - 120,

                behavior: "smooth"

            });

        });

    });

    /*
    |--------------------------------------------------------------------------
    | Active Section
    |--------------------------------------------------------------------------
    */

    const observer = new IntersectionObserver((entries)=>{

        entries.forEach(entry=>{

            if(!entry.isIntersecting) return;

            navLinks.forEach(link=>{

                link.classList.remove("active");

                if(link.getAttribute("href")==="#" + entry.target.id){

                    link.classList.add("active");

                }

            });

        });

    },{

        threshold:.35

    });

    sections.forEach(section=>observer.observe(section));

});