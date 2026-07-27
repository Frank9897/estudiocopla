<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/mail.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);

    exit('Método no permitido');

}

$nombre = trim($_POST['nombre'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

$errores = [];

if ($nombre === '') {

    $errores[] = 'Debe ingresar su nombre.';

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errores[] = 'Correo electrónico inválido.';

}

if ($mensaje === '') {

    $errores[] = 'Debe escribir un mensaje.';

}

if (!empty($errores)) {

    exit(implode('<br>', $errores));

}

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = $config['host'];

    $mail->SMTPAuth = true;

    $mail->Username = $config['username'];

    $mail->Password = $config['password'];

    $mail->SMTPSecure = $config['encryption'];

    $mail->Port = $config['port'];

    $mail->CharSet = 'UTF-8';

    $mail->setFrom(
        $config['from_email'],
        $config['from_name']
    );

    $mail->addAddress($config['to_email']);

    $mail->addReplyTo(
        $email,
        $nombre
    );

    $mail->isHTML(true);

    $mail->Subject = 'Nueva consulta desde el sitio web';

    $mail->Body = "
        <h2>Nueva consulta</h2>

        <p><strong>Nombre:</strong> {$nombre}</p>

        <p><strong>Email:</strong> {$email}</p>

        <p><strong>Teléfono:</strong> {$telefono}</p>

        <p><strong>Mensaje:</strong></p>

        <p>{$mensaje}</p>
    ";

    $mail->AltBody =
        "Nombre: {$nombre}\n" .
        "Email: {$email}\n" .
        "Teléfono: {$telefono}\n\n" .
        "Mensaje:\n{$mensaje}";

    $mail->send();

    echo "Consulta enviada correctamente.";

} catch (Exception $e) {

    echo "Error al enviar el correo.<br><br>";

    echo $mail->ErrorInfo;

}