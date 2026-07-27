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
                    Algunos de nuestros proyectos representativos. Próximamente se incorporarán imágenes y descripciones reales.
                </p>

            </div>

        <div class="projects__grid">

            <?php foreach ($projects as $project): ?>

                <article class="project">

                    <img
                        class="project__image"
                        src="assets/img/projects/<?= $project['cover']; ?>"
                        alt="<?= htmlspecialchars($project['title']); ?>"
                    >

                    <div class="project__content">

                        <span class="project__category">

                            <?= htmlspecialchars($project['category']); ?>

                        </span>

                        <h3 class="project__title">

                            <?= htmlspecialchars($project['title']); ?>

                        </h3>

                        <a
                            href="#"
                            class="project__link">

                            Ver proyecto

                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        </div>

    </div>

</section>