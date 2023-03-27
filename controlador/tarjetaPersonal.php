<?php


// OBTENER DATOS USUARIO
function obtenerDatosUsuario($idUser){

    $datos = [
        "idUser"=>$idUser
    ];

    $json = json_encode($datos);

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-tarjetaPersonal/index.api.php";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

    $output = curl_exec($curl);

    curl_close($curl);

    $usuario = json_decode($output,true);

    return $usuario;
};
?>