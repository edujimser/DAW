<?php

// INSERTAR DATOS USUARIO
function insertarDatosRegistro($idUser, $nombre, $apellido1, $apellido2, $CP, $submit){
            
    $datosPersonales = [
        "idUser" => $idUser,
        "nombre" => $nombre, 
        "apellido1"=>$apellido1, 
        "apellido2"=>$apellido2, 
        "CP"=>$CP, 
        "submit"=>$submit,
    ];

    $json = json_encode($datosPersonales);

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-datosRegistro/index.api.php";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

    curl_exec($curl);

    curl_close($curl);
}


// OBTENER DATOS USUARIO REGISTRO
function obtenerDatosUsuario($idUser){

    $datosPersonales = [
        "idUser"=>$idUser, 
    ];

    $json = json_encode($datosPersonales);

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-datosRegistro/index.api.php";

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