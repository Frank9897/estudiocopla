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

        <div class="section-header">

            <span class="section-header__subtitle">
                CONTINUÁ EXPLORANDO
            </span>

            <h2 class="section-header__title">
                Descubrí más obras del estudio
            </h2>

        </div>

        <div class="projects__grid">

            <?php foreach ($related as $item): ?>

                <article class="project">

                    <img
                        class="project__image"
                        src="<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($item['hero']) ?>"
                        alt="<?= htmlspecialchars($item['title']) ?>">

                    <div class="project__content">

                        <span class="project__category">
                            <?= htmlspecialchars($item['category']) ?>
                        </span>

                        <h3 class="project__title">
                            <?= htmlspecialchars($item['title']) ?>
                        </h3>

                        <a
                            href="<?= BASE_URL ?>/pages/project.php?slug=<?= urlencode($item['slug']) ?>"
                            class="project__link">

                            Ver proyecto

                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        <div class="related-projects__footer">

            <a
                href="<?= BASE_URL ?>/#proyectos"
                class="btn btn--primary">

                Ver todos los proyectos

            </a>

        </div>

    </div>

</section>