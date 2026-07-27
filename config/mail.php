<?php

use PHPMailer\PHPMailer\PHPMailer;

return [

    'host' => 'smtp.donweb.com',

    'port' => 587,

    'username' => 'contacto@copla.com.ar',

    'password' => 'TU_CONTRASEÑA',

    'encryption' => PHPMailer::ENCRYPTION_STARTTLS,

    'from_email' => 'contacto@copla.com.ar',

    'from_name' => 'Estudio COPLA',

    'to_email' => 'contacto@copla.com.ar'

];