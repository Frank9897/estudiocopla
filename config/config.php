<?php
/*
|--------------------------------------------------------------------------
| Archivo: config.php
|--------------------------------------------------------------------------
| Configuración general y datos compartidos del sitio.
|--------------------------------------------------------------------------
*/

define('SITE_NAME', 'Estudio COPLA');

/* La URL base se adapta al entorno local o al dominio del hosting. */
$isLocal = in_array($_SERVER['HTTP_HOST'] ?? '', [
    'localhost',
    '127.0.0.1'
], true);

define(
    'SITE_URL',
    $isLocal
        ? 'http://localhost/estudiocopla'
        : 'http://estudiocopla.atwebpages.com'
);

define('BASE_URL', $isLocal ? '/estudiocopla' : '');

/* Cache-busting automático para css y js locales. */
define('ROOT_PATH', dirname(__DIR__));

function asset_v(string $relativePath): string
{
    $absolutePath = ROOT_PATH . $relativePath;
    $version = is_file($absolutePath) ? filemtime($absolutePath) : time();

    return BASE_URL . $relativePath . '?v=' . $version;
}

/* Datos de contacto centralizados para reutilizarlos en todo el sitio. */
define('SITE_EMAIL', 'coplajujuy@gmail.com');
define('SITE_PHONE', '+54 388 4480633');
define('SITE_WHATSAPP', '543884480633');
define('SITE_LOCATION', 'San Salvador de Jujuy, Argentina');

define('SITE_INSTAGRAM', 'https://www.instagram.com/estudio.copla');
define('SITE_FACEBOOK', 'https://www.facebook.com/Estudio.copla');
define('SITE_TIKTOK', 'https://www.tiktok.com/@estudio.copla');

date_default_timezone_set('America/Argentina/Buenos_Aires');
