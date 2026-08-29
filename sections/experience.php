<section id="experiencia" class="experience section">

    <div class="container">

        <div class="section-header" data-reveal="fade">

            <span class="section-subtitle">
                EXPERIENCIA
            </span>

            <h2 class="section-title">
                Una trayectoria construida proyecto a proyecto.
            </h2>

            <p class="section-description">
                Nuestra experiencia reúne viviendas, remodelaciones y proyectos de distintas escalas, con una mirada centrada en el diseño, la planificación y el confort.
            </p>

        </div>

        <div class="experience__gallery">

            <?php foreach ([1, 2, 3, 4] as $i): ?>

                <figure class="experience__item experience__item--<?= $i ?>" data-media data-reveal="scale" data-reveal-delay="<?= $i ?>">

                    <img
                        src="<?= BASE_URL ?>/assets/img/experience/0<?= $i ?>.webp"
                        alt="Proyecto de Estudio COPLA"
                        loading="lazy"
                        decoding="async"
                        data-fallback>

                </figure>

            <?php endforeach; ?>

        </div>

    </div>

</section>
