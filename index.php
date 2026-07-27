<?php
require_once 'config/config.php';
/*
|--------------------------------------------------------------------------
| Estudio COPLA
|--------------------------------------------------------------------------
| Landing Page oficial del Estudio COPLA.
| Este archivo actúa como punto de entrada del sitio y se encarga
| de cargar de forma ordenada cada componente reutilizable.
|
| Autor: Franco Vasquez
| Proyecto: Landing Page Estudio COPLA
| Versión: 0.1.0
|--------------------------------------------------------------------------
*/
?>

<!DOCTYPE html>
<html lang="es">

<?php require_once 'includes/head.php'; ?>

<body>

    <?php require_once 'includes/navbar.php'; ?>

    <main>

        <?php require_once 'sections/hero.php'; ?>

        <?php require_once 'sections/about.php'; ?>

        <?php require_once 'sections/services.php'; ?>

        <?php require_once 'sections/projects.php'; ?>

        <?php require_once 'sections/methodology.php'; ?>

        <?php require_once 'sections/contact.php'; ?>

        <?php require_once 'sections/map.php'; ?>

    </main>

    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/scripts.php'; ?>
    
</body>

</html>