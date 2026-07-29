document.addEventListener("DOMContentLoaded", () => {

    const navbar = document.querySelector(".navbar");

    if(!navbar) return;

    const toggle = document.querySelector(".navbar__toggle");
    const menu = document.querySelector(".navbar__menu");
    const overlay = document.querySelector(".navbar__overlay");

    window.addEventListener("scroll", () => {

        navbar.classList.toggle("scrolled", window.scrollY > 40);

    });

    function closeMenu(){

        toggle?.classList.remove("is-open");
        menu?.classList.remove("is-open");
        overlay?.classList.remove("is-open");
        toggle?.setAttribute("aria-expanded", "false");
        document.body.classList.remove("no-scroll");

    }

    function openMenu(){

        toggle?.classList.add("is-open");
        menu?.classList.add("is-open");
        overlay?.classList.add("is-open");
        toggle?.setAttribute("aria-expanded", "true");
        document.body.classList.add("no-scroll");

    }

    if(toggle && menu){

        toggle.addEventListener("click", () => {

            toggle.classList.contains("is-open") ? closeMenu() : openMenu();

        });

        overlay?.addEventListener("click", closeMenu);

        menu.querySelectorAll(".navbar__link").forEach((link) => {

            link.addEventListener("click", closeMenu);

        });

    }

});