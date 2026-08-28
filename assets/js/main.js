/*
|--------------------------------------------------------------------------
| MAIN.JS
|--------------------------------------------------------------------------
| Inicializa el motor de animaciones de scroll (data-reveal), el
| manejo de imágenes aún no disponibles (placeholders visuales) y
| el preloader de marca.
|--------------------------------------------------------------------------
*/

/* ============ Preloader ============ */
/* Se oculta cuando la página termina de cargar (window.load), con un
   mínimo de tiempo visible para que no sea un parpadeo, y con un
   tope de seguridad por si algún recurso tarda demasiado. */

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

            threshold: .15,
            rootMargin: "0px 0px -60px 0px"

        });

        revealItems.forEach((item) => observer.observe(item));

    } else {

        revealItems.forEach((item) => item.classList.add("is-visible"));

    }

    /* ============ Placeholder para imágenes faltantes ============ */
    /* Mientras no haya fotos reales, en vez de mostrar el ícono de
       imagen rota se conserva el fondo decorativo del contenedor. */

    document.querySelectorAll("img[data-fallback]").forEach((img) => {

        img.addEventListener("error", () => {

            img.closest("[data-media]")?.classList.add("is-placeholder");
            img.style.display = "none";

        }, { once:true });

    });

});
