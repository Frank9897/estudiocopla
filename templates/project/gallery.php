<section class="project-gallery">

    <div class="container">

        <div class="section-header" data-reveal="fade">

            <span class="section-header__subtitle">
                GALERÍA
            </span>

            <h2 class="section-header__title">
                Imágenes del proyecto
            </h2>

        </div>

        <div class="project-gallery__grid">

            <?php foreach ($project['gallery'] as $i => $image): ?>

                <figure
                    class="project-gallery__item"
                    data-media
                    data-reveal="scale"
                    data-reveal-delay="<?= ($i % 4) + 1 ?>">

                    <img
                        src="<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($image) ?>"
                        alt="<?= htmlspecialchars($project['title']) ?>"
                        data-fallback>

                </figure>

            <?php endforeach; ?>

        </div>

    </div>

</section>
