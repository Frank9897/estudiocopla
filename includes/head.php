<?php
/*
|--------------------------------------------------------------------------
| Archivo: head.php
|--------------------------------------------------------------------------
| Metadatos, tipografías, iconos y hojas de estilo globales.
|--------------------------------------------------------------------------
*/
?>

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        <?= SITE_NAME ?> | Confort, Planificación y Arquitectura
    </title>

    <meta
        name="description"
        content="Estudio COPLA desarrolla proyectos de arquitectura, planificación y construcción con un enfoque funcional, contemporáneo y personalizado.">

    <meta
        name="keywords"
        content="arquitectura, estudio de arquitectura, copla, planificación, construcción, diseño arquitectónico">

    <meta
        name="author"
        content="Franco Vasquez">

    <link rel="icon" href="<?= BASE_URL ?>/favicon.ico">

    <!-- Tipografías y recursos externos de uso global. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        referrerpolicy="no-referrer">

    <!-- Hojas de estilo globales y de la página de proyecto. -->
    <link rel="stylesheet" href="<?= asset_v('/assets/css/reset.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('/assets/css/variables.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('/assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('/assets/css/animations.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('/assets/css/pages/project.css') ?>">

</head>
