<section class="project-services">

    <div class="container">

        <div class="section-header">

            <span class="section-header__subtitle">
                SERVICIOS
            </span>

            <h2 class="section-header__title">
                Alcance del trabajo
            </h2>

        </div>

        <div class="project-services__grid">

            <?php foreach ($project['services'] as $service): ?>

                <article class="project-service">

                    <span class="project-service__icon">
                        ✓
                    </span>

                    <h3 class="project-service__title">

                        <?= htmlspecialchars($service) ?>

                    </h3>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>