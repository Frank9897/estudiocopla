<?php
/*
|--------------------------------------------------------------------------
| Archivo: navbar.php
|--------------------------------------------------------------------------
| Barra de navegación principal del sitio.
| Contiene el logotipo, enlaces de navegación y el botón de contacto.
|--------------------------------------------------------------------------
*/
?>

<header class="header">

    <nav class="navbar">

        <div class="container">

            <a
                href="#hero"
                class="navbar__logo">

                <?= SITE_NAME ?>

            </a>

            <ul class="navbar__menu">

                <li>
                    <a href="#about">Nosotros</a>
                </li>

                <li>
                    <a href="#services">Servicios</a>
                </li>

                <li>
                    <a href="#projects">Proyectos</a>
                </li>

                <li>
                    <a href="#contact">Contacto</a>
                </li>

            </ul>

            <a
                href="#contact"
                class="navbar__button">

                Solicitar presupuesto

            </a>

        </div>

    </nav>

</header>