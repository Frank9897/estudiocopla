<?php

$projects = require __DIR__ . '/../config/projects.php';

?>

<section id="proyectos" class="projects section">

    <div class="container">

        <div class="projects">

            <div class="projects__header">

                <span class="projects__subtitle">
                    PROYECTOS
                </span>

                <h2 class="projects__title">
                    Cada obra refleja nuestra forma de trabajar.
                </h2>

                <p class="projects__text">
                    Algunos de nuestros proyectos representativos.
                </p>

            </div>

            <div class="projects__grid">

                <?php foreach ($projects as $project): ?>

                    <a
                        href="<?= BASE_URL ?>/pages/project.php?slug=<?= urlencode($project['slug']) ?>"
                        class="project-card">

                        <img
                            class="project-card__image"
                            src="<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($project['hero']) ?>"
                            alt="<?= htmlspecialchars($project['title']) ?>">

                        <div class="project-card__overlay">

                            <span class="project-card__category">

                                <?= htmlspecialchars($project['category']) ?>

                            </span>

                            <div class="project-card__footer">

                                <h3 class="project-card__title">

                                    <?= htmlspecialchars($project['title']) ?>

                                </h3>

                                <span class="project-card__arrow">

                                    →

                                </span>

                            </div>

                        </div>

                    </a>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>