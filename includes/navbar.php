<?php
/*
|--------------------------------------------------------------------------
| Archivo: navbar.php
|--------------------------------------------------------------------------
| Barra de navegación principal.
|--------------------------------------------------------------------------
*/

$is_project_page = basename($_SERVER['PHP_SELF']) === 'project.php';
?>

<header class="header">

    <nav class="navbar">

        <div class="container navbar__container">

            <a
            href="<?= $is_project_page ? BASE_URL . '/#proyectos' : BASE_URL . '/#inicio' ?>"
            class="navbar__logo">

                <?= SITE_NAME ?>

            </a>

            <ul class="navbar__menu">

                <?php if ($is_project_page): ?>

                    <li>
                        <a
                            class="navbar__link"
                            href="<?= BASE_URL ?>/#proyectos">

                            ← Volver a proyectos

                        </a>
                    </li>

                <?php else: ?>

                    <li>
                        <a class="navbar__link" href="<?= BASE_URL ?>/#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li>
                        <a class="navbar__link" href="<?= BASE_URL ?>/#servicios">
                            Servicios
                        </a>
                    </li>

                    <li>
                        <a class="navbar__link" href="<?= BASE_URL ?>/#proyectos">
                            Proyectos
                        </a>
                    </li>

                    <li>
                        <a class="navbar__link" href="<?= BASE_URL ?>/#construccion">
                            Construcción
                        </a>
                    </li>

                    <li>
                        <a class="navbar__link" href="<?= BASE_URL ?>/#contacto">
                            Contacto
                        </a>
                    </li>

                <?php endif; ?>

            </ul>

            <a
                href="<?= BASE_URL ?>/#contacto"
                class="navbar__button">

                Presupuesto

            </a>

            <button
                type="button"
                class="navbar__toggle"
                aria-label="Abrir menú"
                aria-expanded="false">

                <span></span>
                <span></span>
                <span></span>

            </button>

        </div>

    </nav>

    <div class="navbar__overlay"></div>

</header>