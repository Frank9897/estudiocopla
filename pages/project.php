<?php
require_once __DIR__ . '/../bootstrap.php';

$slug = $_GET['slug'] ?? '';

$project = findProjectBySlug($slug);

if ($project === null) {
    http_response_code(404);
    exit('Proyecto no encontrado.');
}

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/navbar.php';
?>

<main>

    <?php require __DIR__ . '/../templates/project/hero.php'; ?>
    <?php require __DIR__ . '/../templates/project/overview.php'; ?>
    <?php require __DIR__ . '/../templates/project/gallery.php'; ?>
    <?php require __DIR__ . '/../templates/project/services.php'; ?>
    <?php require __DIR__ . '/../templates/project/related.php'; ?>

</main>

<?php
require __DIR__ . '/../includes/footer.php';
require __DIR__ . '/../includes/scripts.php';
?>