<?php
// Insertar datos de usuario
    function insertarDatosUsuario($edad, $estadoCivil, $grupoFamiliar, $estadoProfesional, $metrosVivienda, $tipoVivienda, $profesion, $rentaAnual, $hobbies, $descripcionBusqueda, $descripcionCompañero){
            
        $datosUsuario = [
            "edad" => $edad,
            "estadoCivil" => $estadoCivil, 
            "grupoFamiliar"=>$grupoFamiliar, 
            "estadoProfesional"=>$estadoProfesional, 
            "metrosVivienda"=>$metrosVivienda, 
            "tipoVivienda"=>$tipoVivienda,
            "profesion"=>$profesion,
            "rentaAnual"=>$rentaAnual,
            "hobbies"=>$hobbies,
            "descripcionBusqueda"=>$descripcionBusqueda,
            "descripcionCompañero"=>$descripcionCompañero
        ];

        $json = json_encode($datosUsuario);

        $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-registro-login/index.api.php";
  
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

        curl_exec($curl);

        curl_close($curl);
        
    };

?>