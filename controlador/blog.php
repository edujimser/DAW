<?php

// OBTENER DATOS BLOG

function obtenerDatosBlog(){

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-blog/index.api.php";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $datosTest = curl_exec($curl);

    curl_close($curl);

    return json_decode($datosTest, true);
}

?>