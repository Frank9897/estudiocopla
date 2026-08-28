/*
|--------------------------------------------------------------------------
| MAIN.JS
|--------------------------------------------------------------------------
| Animaciones de entrada, placeholders de imágenes y preloader global.
| El menú móvil pertenece exclusivamente a navbar.js para evitar eventos
| duplicados sobre el mismo botón y estado.
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

            threshold:.15,
            rootMargin:"0px 0px -60px 0px"

        });

        revealItems.forEach((item) => observer.observe(item));

    } else {

        revealItems.forEach((item) => item.classList.add("is-visible"));

    }

    /* ============ Placeholder para imágenes faltantes ============ */
    /* También detecta errores que ocurrieron antes de registrar el evento. */

    document.querySelectorAll("img[data-fallback]").forEach((img) => {

        const showPlaceholder = () => {

            img.closest("[data-media]")?.classList.add("is-placeholder");
            img.hidden = true;

        };

        img.addEventListener("error", showPlaceholder, { once:true });

        if(img.complete && img.naturalWidth === 0){
            showPlaceholder();
        }

    });

});
