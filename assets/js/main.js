/*
|--------------------------------------------------------------------------
| MAIN.JS
|--------------------------------------------------------------------------
| Inicializa el motor de animaciones de scroll (data-reveal) y el
| manejo de imágenes aún no disponibles (placeholders visuales).
|--------------------------------------------------------------------------
*/

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
