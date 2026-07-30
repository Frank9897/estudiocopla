<?php
/*
|--------------------------------------------------------------------------
| Archivo: config.php
|--------------------------------------------------------------------------
| Configuración general del proyecto.
| Centraliza las constantes que serán utilizadas en todo el sitio.
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Información del sitio
|--------------------------------------------------------------------------
*/

define('SITE_NAME', 'Estudio COPLA');

define('SITE_URL', 'http://localhost/estudiocopla');

define('BASE_URL', '/estudiocopla');

/*
|--------------------------------------------------------------------------
| Cache-busting de assets
|--------------------------------------------------------------------------
| asset_v() agrega ?v=<fecha de modificación> a css/js locales, para que
| el navegador no sirva una versión vieja cacheada cuando el archivo
| cambia durante el desarrollo.
|--------------------------------------------------------------------------
*/

define('ROOT_PATH', dirname(__DIR__));

function asset_v(string $relativePath): string
{
    $absolutePath = ROOT_PATH . $relativePath;

    $version = is_file($absolutePath) ? filemtime($absolutePath) : time();

    return BASE_URL . $relativePath . '?v=' . $version;
}

/*
|--------------------------------------------------------------------------
| Información de contacto
|--------------------------------------------------------------------------
*/

define('SITE_EMAIL', 'contacto@estudiocopla.com.ar');

define('SITE_PHONE', '+54 388 000-0000');

/*
|--------------------------------------------------------------------------
| Zona horaria
|--------------------------------------------------------------------------
*/

date_default_timezone_set('America/Argentina/Buenos_Aires');