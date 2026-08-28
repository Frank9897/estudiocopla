/*
|--------------------------------------------------------------------------
| NAVBAR.JS
|--------------------------------------------------------------------------
| Controla el estado del navbar y el menú móvil.
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const navbar = document.querySelector(".navbar");
    const toggle = document.querySelector(".navbar__toggle");
    const menu = document.querySelector(".navbar__menu");
    const overlay = document.querySelector(".navbar__overlay");

    if(!navbar || !toggle || !menu) return;

    const mobileBreakpoint = window.matchMedia("(max-width: 992px)");

    function updateScrolled(){

        navbar.classList.toggle("scrolled", window.scrollY > 40);

    }

    function closeMenu(){

        toggle.classList.remove("is-open");
        menu.classList.remove("is-open");
        overlay?.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
        toggle.setAttribute("aria-label", "Abrir menú");
        document.body.classList.remove("no-scroll");

    }

    function openMenu(){

        if(!mobileBreakpoint.matches) return;

        toggle.classList.add("is-open");
        menu.classList.add("is-open");
        overlay?.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
        toggle.setAttribute("aria-label", "Cerrar menú");
        document.body.classList.add("no-scroll");

    }

    function handleViewportChange(){

        if(!mobileBreakpoint.matches){
            closeMenu();
        }

    }

    updateScrolled();

    window.addEventListener("scroll", updateScrolled, { passive:true });
    window.addEventListener("resize", handleViewportChange);

    toggle.addEventListener("click", () => {

        menu.classList.contains("is-open") ? closeMenu() : openMenu();

    });

    overlay?.addEventListener("click", closeMenu);

    menu.querySelectorAll(".navbar__link").forEach((link) => {

        link.addEventListener("click", closeMenu);

    });

    document.addEventListener("keydown", (event) => {

        if(event.key === "Escape"){
            closeMenu();
        }

    });

});
