<section class="project-gallery">

    <div class="container">

        <div class="section-header" data-reveal="fade">

            <span class="section-subtitle">
                GALERÍA
            </span>

            <h2 class="section-title">
                Imágenes del proyecto
            </h2>

        </div>

        <?php
        // La portada también forma parte de la galería para mostrar todo el material disponible.
        $galleryImages = array_merge([$project['hero']], $project['gallery']);
        ?>

        <div class="project-gallery__grid">

            <?php foreach ($galleryImages as $i => $image): ?>

                <?php
                $imagePath = str_contains($image, '/')
                    ? $image
                    : dirname($project['hero']) . '/' . ltrim($image, '/');
                ?>

                <figure
                    class="project-gallery__item"
                    data-media
                    data-reveal="scale"
                    data-reveal-delay="<?= ($i % 4) + 1 ?>">

                    <img
                        src="<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($imagePath) ?>"
                        alt="<?= htmlspecialchars($project['title']) ?>"
                        data-fallback
                        loading="lazy"
                        decoding="async">

                </figure>

            <?php endforeach; ?>

        </div>

    </div>

</section>
