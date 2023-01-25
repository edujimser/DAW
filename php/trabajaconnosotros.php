<?php

// datos que se van a solicitar 
if (empty($_POST["nombre completo"])) {
    exit("Falta el nombre");
}

if (empty($_POST["email"])) {
    exit("Falta el email");
}
if (empty($_POST["número de contacto"])) {
    exit("Falta el número de contacto");
}

if (empty($_POST["mensaje"])) {
    exit("Falta el mensaje");
}

$nombre = $_POST["nombre completo"];
$email = $_POST["email"];
$num = $_POST["número de contacto"];
$mensaje = $_POST["mensaje"];


//Mensajes entrantes
$asunto = "Nuevo mensaje sobre incorporación de empleo recibido";

//Datos para enviar el mensaje 
$datos = "De: $nombre\nEmail: $email\nMensaje: $mensaje";
$mensaje = "Se ha recibido un nuevo mensaje sobre una posible incorporación de empleo.:\n$datos";
$destinatario = "tu_correo@dominio.com"; // Persona que recibirá los mensajes
$encabezados = "Sender: correo@dominio.com\r\n"; // El remitente
$encabezados .= "From: $nombre <" . $email . ">\r\n";
$encabezados .= "Reply-To: $nombre <$email>\r\n";
$resultado = mail($destinatario, $asunto, $mensaje, $encabezados);

//Resultados que nos devuelve, dos opciones, si el mensaje se envío o si hubo algún fallo
if ($resultado) {
    echo "<h1>Mensaje enviado, ¡Gracias por estar interesado en trabajar con nosotros!</h1>";
    echo "<p>Tu mensaje se ha enviado correctamente.</p><h2>Importante</h2><p>Revisa tu bandeja de SPAM, en ocasiones las respuestas están allí. </p>";
} else {
    echo "Tu mensaje no se ha enviado. Intentalo de nuevo.";
}

?>