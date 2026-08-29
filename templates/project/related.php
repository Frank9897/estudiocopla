<?php

$allProjects = require __DIR__ . '/../../config/projects.php';

$related = array_filter(
    $allProjects,
    fn($item) => $item['slug'] !== $project['slug']
);

$related = array_slice(array_values($related), 0, 3);

?>

<section class="related-projects">

    <div class="container">

        <div class="section-header" data-reveal="fade">

            <span class="section-subtitle">
                CONTINUÁ EXPLORANDO
            </span>

            <h2 class="section-title">
                Descubrí más obras del estudio
            </h2>

        </div>

        <div class="projects__grid">

            <?php foreach ($related as $i => $item): ?>

                <a
                    href="<?= BASE_URL ?>/pages/project.php?slug=<?= urlencode($item['slug']) ?>"
                    class="project-card"
                    data-media
                    data-reveal="scale"
                    data-reveal-delay="<?= $i + 1 ?>">

                    <img
                        class="project-card__image"
                        src="<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($item['hero']) ?>"
                        alt="<?= htmlspecialchars($item['title']) ?>"
                        data-fallback
                        loading="lazy"
                        decoding="async">

                    <div class="project-card__overlay">

                        <span class="project-card__category">
                            <?= htmlspecialchars($item['category']) ?>
                        </span>

                        <div class="project-card__footer">

                            <h3 class="project-card__title">
                                <?= htmlspecialchars($item['title']) ?>
                            </h3>

                            <span class="project-card__arrow">
                                →
                            </span>

                        </div>

                    </div>

                </a>

            <?php endforeach; ?>

        </div>

        <div class="related-projects__footer">

            <a
                href="<?= BASE_URL ?>/#proyectos"
                class="button button--primary">
                Ver todos los proyectos
            </a>

        </div>

    </div>

</section>
