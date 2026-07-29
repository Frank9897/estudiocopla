<section class="project-hero">
    <div
    class="project-hero__background"
    style="background-image:url('<?= BASE_URL ?>/assets/img/projects/<?= htmlspecialchars($project['hero']) ?>');">
</div>
<div class="project-hero__overlay"></div>
    <div class="container">

        <span class="project-hero__label">
            Proyecto
        </span>

        <h1 class="project-hero__title">
            <?= htmlspecialchars($project['title']) ?>
        </h1>

        <p class="project-hero__category">
            <?= htmlspecialchars($project['category']) ?>
        </p>

        <p class="project-hero__headline">
            <?= htmlspecialchars($project['headline']) ?>
        </p>

        <a
            href="#overview"
            class="project-hero__scroll">

            Descubrir proyecto ↓

        </a>

    </div>

</section>