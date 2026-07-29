/*
|--------------------------------------------------------------------------
| SCROLL.JS
|--------------------------------------------------------------------------
| Efecto sutil de paralaje en el hero y en el hero de proyecto.
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const parallaxTargets = document.querySelectorAll(
        ".hero, .project-hero__background"
    );

    if(!parallaxTargets.length) return;

    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if(prefersReducedMotion) return;

    let ticking = false;

    function updateParallax(){

        const scrollY = window.scrollY;

        parallaxTargets.forEach((el) => {

            const speed = .25;
            const offset = Math.min(scrollY * speed, 160);

            el.style.backgroundPosition = `center calc(50% + ${offset}px)`;

        });

        ticking = false;

    }

    window.addEventListener("scroll", () => {

        if(!ticking){

            window.requestAnimationFrame(updateParallax);
            ticking = true;

        }

    });

});
