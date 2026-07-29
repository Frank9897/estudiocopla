<section class="project-gallery">

    <div class="container">

        <div class="section-header">

            <span class="section-header__subtitle">
                GALERÍA
            </span>

            <h2 class="section-header__title">
                Imágenes del proyecto
            </h2>

        </div>

        <div class="project-gallery__grid">

            <?php foreach ($project['gallery'] as $image): ?>

                <figure class="project-gallery__item">

                    <img
                        src="<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($image) ?>"
                        alt="<?= htmlspecialchars($project['title']) ?>">

                </figure>

            <?php endforeach; ?>

        </div>

    </div>

</section>