<?php

// Función para obtener todos los artículos del blog
function obtenerArticulos() {
    $url = "http://api-fuction.php";   //*CAMBIAR LA URL POR LA DE LA API
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Función para obtener un artículo específico del blog
function obtenerArticulo($id) {
    $url = "http://tu_api.com/ruta/articulo?id=" . $id; //*CAMBIAR LA URL POR LA DE LA API
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Función para obtener todos los comentarios de un artículo específico del blog
function obtenerComentarios($id) {
    $url = "http://tu_api.com/ruta/comentarios?id=" . $id; //*CAMBIAR LA URL POR LA DE LA API
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Función para crear un nuevo artículo en el blog
function crearArticulo($titulo, $contenido) {
    $url = "http://tu_api.com/ruta/articulos"; //*CAMBIAR LA URL POR LA DE LA API
    $data = array(
        'titulo' => $titulo,
        'contenido' => $contenido
    );
    $payload = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

?>
