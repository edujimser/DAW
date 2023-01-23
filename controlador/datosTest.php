<?php

// INSERTAR DATOS USUARIO
function insertarTest($idUser ,$q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $submit, $estado){
            
    $datosTest = [
        "idUser" => $idUser,
        "q1" => $q1, 
        "q2"=>$q2, 
        "q3"=>$q3, 
        "q4"=>$q4, 
        "q5"=>$q5,
        "q6"=>$q6,
        "q7"=>$q7,
        "q8"=>$q8,
        "q9"=>$q9,
        "q10"=>$q10,
        "submit"=>$submit,
        "estado" => $estado
    ];

    $json = json_encode($datosTest);

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-datosTest/index.api.php";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

    curl_exec($curl);

    curl_close($curl);
}


// OBTENER DATOS USUARIO

function obtenerDatos($idUser){
            
    $datosTest = [
        "idUser" => $idUser,
    ];

    $json = json_encode($datosTest);

    $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-datosTest/index.api.php";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

    $datosTest = curl_exec($curl);

    curl_close($curl);

    return json_decode($datosTest, true);
}

?>