/*
|--------------------------------------------------------------------------
| MAIN.JS
|--------------------------------------------------------------------------
| Inicializa animaciones, preloader, menú móvil y comportamiento de
| imágenes con fallback visual.
|--------------------------------------------------------------------------
*/

/* ============ Preloader ============ */

(() => {

    const preloader = document.getElementById("preloader");

    if(!preloader) return;

    const MIN_VISIBLE_MS = 500;
    const SAFETY_TIMEOUT_MS = 4000;

    const shownAt = Date.now();
    let hidden = false;

    function hidePreloader(){

        if(hidden) return;
        hidden = true;

        const elapsed = Date.now() - shownAt;
        const wait = Math.max(0, MIN_VISIBLE_MS - elapsed);

        setTimeout(() => {

            preloader.classList.add("is-hidden");

            preloader.addEventListener("transitionend", () => {
                preloader.remove();
            }, { once:true });

        }, wait);

    }

    window.addEventListener("load", hidePreloader);
    setTimeout(hidePreloader, SAFETY_TIMEOUT_MS);

})();

document.addEventListener("DOMContentLoaded", () => {

    /* ============ Menú móvil ============ */
    /* El botón controla tanto el panel como el fondo. Al cerrar se
       restaura el scroll para evitar que la página quede bloqueada. */

    const toggle = document.querySelector(".navbar__toggle");
    const menu = document.querySelector(".navbar__menu");
    const overlay = document.querySelector(".navbar__overlay");

    if(toggle && menu && overlay){

        const closeMenu = () => {

            menu.classList.remove("is-open");
            overlay.classList.remove("is-open");
            toggle.classList.remove("is-open");
            toggle.setAttribute("aria-expanded", "false");
            toggle.setAttribute("aria-label", "Abrir menú");
            document.body.classList.remove("menu-open");

        };

        toggle.addEventListener("click", () => {

            const isOpen = menu.classList.toggle("is-open");

            overlay.classList.toggle("is-open", isOpen);
            toggle.classList.toggle("is-open", isOpen);
            toggle.setAttribute("aria-expanded", String(isOpen));
            toggle.setAttribute("aria-label", isOpen ? "Cerrar menú" : "Abrir menú");
            document.body.classList.toggle("menu-open", isOpen);

        });

        overlay.addEventListener("click", closeMenu);

        menu.querySelectorAll("a").forEach((link) => {

            link.addEventListener("click", closeMenu);

        });

        window.addEventListener("resize", () => {

            if(window.innerWidth > 992){
                closeMenu();
            }

        });

    }

    /* ============ Scroll reveal ============ */

    const revealItems = document.querySelectorAll("[data-reveal]");

    if(revealItems.length && "IntersectionObserver" in window){

        const observer = new IntersectionObserver((entries, obs) => {

            entries.forEach((entry) => {

                if(entry.isIntersecting){

                    entry.target.classList.add("is-visible");
                    obs.unobserve(entry.target);

                }

            });

        }, {

            threshold: .15,
            rootMargin: "0px 0px -60px 0px"

        });

        revealItems.forEach((item) => observer.observe(item));

    } else {

        revealItems.forEach((item) => item.classList.add("is-visible"));

    }

    /* ============ Placeholder para imágenes faltantes ============ */

    document.querySelectorAll("img[data-fallback]").forEach((img) => {

        img.addEventListener("error", () => {

            img.closest("[data-media]")?.classList.add("is-placeholder");
            img.style.display = "none";

        }, { once:true });

    });

});
