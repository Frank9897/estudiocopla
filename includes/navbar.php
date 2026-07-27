<?php
/*
|--------------------------------------------------------------------------
| Archivo: navbar.php
|--------------------------------------------------------------------------
| Barra de navegación principal.
|--------------------------------------------------------------------------
*/
?>

<header class="header">

    <nav class="navbar">

        <div class="container navbar__container">

            <a href="#inicio" class="navbar__logo">

                <?= SITE_NAME ?>

            </a>

            <ul class="navbar__menu">

                <li>
                    <a class="navbar__link" href="#nosotros">
                        Nosotros
                    </a>
                </li>

                <li>
                    <a class="navbar__link" href="#servicios">
                        Servicios
                    </a>
                </li>

                <li>
                    <a class="navbar__link" href="#proyectos">
                        Proyectos
                    </a>
                </li>

                <li>
                    <a class="navbar__link" href="#contacto">
                        Contacto
                    </a>
                </li>

            </ul>

            <a
                href="#contacto"
                class="navbar__button">

                Presupuesto

            </a>

        </div>

    </nav>

</header>