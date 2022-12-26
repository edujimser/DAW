<?php

// INSERTAR DATOS USUARIO
function insertarDatosPersonales($idUser, $edad, $estadoCivil, $profesion, $grupoFamiliar, $metrosVivienda, $tipoVivienda, $estadoProfesional, $rentaAnual, $descripcionBusquedad, $descripcionCompañero, $hobbies, $submit, $remplazar){
            
    $datosPersonales = [
        "idUser" => $idUser,
        "edad" => $edad, 
        "estadoCivil"=>$estadoCivil, 
        "profesion"=>$profesion, 
        "grupoFamiliar"=>$grupoFamiliar, 
        "metrosVivienda"=>$metrosVivienda,
        "tipoVivienda"=>$tipoVivienda,
        "estadoProfesional"=>$estadoProfesional,
        "rentaAnual"=>$rentaAnual,
        "descripcionBusquedad"=>$descripcionBusquedad,
        "descripcionCompañero"=>$descripcionCompañero,
        "hobbies"=>$hobbies,
        "submit"=>$submit,
        "remplazar"=>$remplazar
    ];

    $json = json_encode($datosPersonales);

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-datosPersonales/index.api.php";

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

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-datosPersonales/index.api.php";

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