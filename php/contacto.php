<?php

// datos que se van a solicitar para el formulario de contacto
if (empty($_POST["nombre"])) {
    exit("Falta el nombre");
}

if (empty($_POST["email"])) {
    exit("Falta el email");
}

if (empty($_POST["mensaje"])) {
    exit("Falta el mensaje");
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
    echo "Email inválido. Intenta con otro correo.";
    exit;
}

//Mensajes entrantes
$asunto = "Nuevo mensaje en el sitio web";

$datos = "De: $nombre\nEmail: $email\nMensaje: $mensaje";
$mensaje = "Has recibido un mensaje desde el formulario de contacto de tu sitio web. Aquí están los detalles:\n$datos";
$destinatario = "tu_correo@dominio.com"; // aquí la persona que recibirá los mensajes
$encabezados = "Sender: correo@dominio.com\r\n"; // El remitente, debe ser un correo de tu dominio de servidor
$encabezados .= "From: $nombre <" . $email . ">\r\n";
$encabezados .= "Reply-To: $nombre <$email>\r\n";
$resultado = mail($destinatario, $asunto, $mensaje, $encabezados);
if ($resultado) {
    echo "<h1>Mensaje enviado, ¡Gracias por contactarnos!</h1>";
    echo "<p>Tu mensaje se ha enviado correctamente.</p><h2>Importante</h2><p>Revisa tu bandeja de SPAM, en ocasiones las respuestas están allí. </p>";
} else {
    echo "Tu mensaje no se ha enviado. Intentalo de nuevo.";
}