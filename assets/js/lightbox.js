/*
|--------------------------------------------------------------------------
| LIGHTBOX DE GALERÍA
|--------------------------------------------------------------------------
| Permite ampliar imágenes y recorrer la galería sin abandonar el proyecto.
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const items = [...document.querySelectorAll(".project-gallery__item img")];

    if(!items.length) return;

    const lightbox = document.createElement("div");

    lightbox.className = "lightbox";
    lightbox.setAttribute("aria-hidden", "true");

    lightbox.innerHTML = `
        <div class="lightbox__backdrop" data-lightbox-close></div>

        <div
            class="lightbox__dialog"
            role="dialog"
            aria-modal="true"
            aria-label="Visor de imágenes del proyecto">

            <button
                class="lightbox__close"
                type="button"
                aria-label="Cerrar imagen"
                data-lightbox-close>
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>

            <button
                class="lightbox__prev"
                type="button"
                aria-label="Imagen anterior">
                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
            </button>

            <figure class="lightbox__figure">

                <img
                    class="lightbox__image"
                    src=""
                    alt="">

                <figcaption class="lightbox__caption"></figcaption>

            </figure>

            <button
                class="lightbox__next"
                type="button"
                aria-label="Imagen siguiente">
                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            </button>

            <span class="lightbox__counter" aria-live="polite"></span>

        </div>
    `;

    document.body.appendChild(lightbox);

    const image = lightbox.querySelector(".lightbox__image");
    const caption = lightbox.querySelector(".lightbox__caption");
    const counter = lightbox.querySelector(".lightbox__counter");
    const dialog = lightbox.querySelector(".lightbox__dialog");
    const previous = lightbox.querySelector(".lightbox__prev");
    const next = lightbox.querySelector(".lightbox__next");

    let currentIndex = 0;
    let lastFocusedElement = null;
    let touchStartX = 0;

    function updateImage(index){

        currentIndex = (index + items.length) % items.length;

        const source = items[currentIndex];

        image.src = source.currentSrc || source.src;
        image.alt = source.alt || "Imagen del proyecto";
        caption.textContent = source.alt || "";
        counter.textContent = `${currentIndex + 1} / ${items.length}`;

        const single = items.length <= 1;
        previous.hidden = single;
        next.hidden = single;

    }

    function open(index){

        lastFocusedElement = document.activeElement;
        updateImage(index);

        lightbox.classList.add("is-open");
        lightbox.setAttribute("aria-hidden", "false");
        document.body.classList.add("lightbox-open");

        dialog.focus({ preventScroll:true });

    }

    function close(){

        lightbox.classList.remove("is-open");
        lightbox.setAttribute("aria-hidden", "true");
        document.body.classList.remove("lightbox-open");
        image.src = "";

        lastFocusedElement?.focus({ preventScroll:true });

    }

    function move(step){
        updateImage(currentIndex + step);
    }

    items.forEach((item, index) => {

        item.closest(".project-gallery__item")?.addEventListener("click", () => open(index));

        item.closest(".project-gallery__item")?.setAttribute("role", "button");
        item.closest(".project-gallery__item")?.setAttribute("tabindex", "0");
        item.closest(".project-gallery__item")?.setAttribute("aria-label", `Ampliar imagen ${index + 1}`);

        item.closest(".project-gallery__item")?.addEventListener("keydown", (event) => {

            if(event.key === "Enter" || event.key === " "){
                event.preventDefault();
                open(index);
            }

        });

    });

    previous.addEventListener("click", () => move(-1));
    next.addEventListener("click", () => move(1));

    lightbox.querySelectorAll("[data-lightbox-close]").forEach((element) => {
        element.addEventListener("click", close);
    });

    document.addEventListener("keydown", (event) => {

        if(!lightbox.classList.contains("is-open")) return;

        if(event.key === "Escape") close();
        if(event.key === "ArrowLeft") move(-1);
        if(event.key === "ArrowRight") move(1);

    });

    lightbox.addEventListener("touchstart", (event) => {

        touchStartX = event.changedTouches[0].screenX;

    }, { passive:true });

    lightbox.addEventListener("touchend", (event) => {

        const touchEndX = event.changedTouches[0].screenX;
        const distance = touchEndX - touchStartX;

        if(Math.abs(distance) < 45) return;

        move(distance > 0 ? -1 : 1);

    }, { passive:true });

});
