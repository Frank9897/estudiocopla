<?php
require_once __DIR__ . '/bootstrap.php';
/*
|--------------------------------------------------------------------------
| ESTUDIO COPLA
|--------------------------------------------------------------------------
| Entrada principal de la landing y carga ordenada de sus secciones.
|--------------------------------------------------------------------------
*/
?>

<!DOCTYPE html>
<html lang="es">

<?php require_once 'includes/head.php'; ?>

<body>

    <div class="preloader" id="preloader">
        <img
            src="<?= BASE_URL ?>/assets/img/logo/isotipo-mint.png"
            alt=""
            class="preloader__mark">
    </div>

    <?php require_once 'includes/navbar.php'; ?>

    <main>

        <?php require_once 'sections/hero.php'; ?>
        <?php require_once 'sections/about.php'; ?>
        <?php require_once 'sections/services.php'; ?>
        <?php require_once 'sections/differential.php'; ?>
        <?php require_once 'sections/projects.php'; ?>
        <?php require_once 'sections/methodology.php'; ?>
        <?php require_once 'sections/construction.php'; ?>
        <?php require_once 'sections/closing.php'; ?>
        <?php require_once 'sections/contact.php'; ?>

    </main>

    <?php require_once 'includes/footer.php'; ?>
    <?php require_once 'includes/scripts.php'; ?>

</body>

</html>
