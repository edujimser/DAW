<?php

    // INSERSIÓN DE USUARIO FORMULARIO REGISTRO
    function insertarRegistro($nombre, $apellido1, $apellido2, $nomUser, $DNI, $pass, $email, $telefono, $CP, $submit){
            
        $registro = [
            "nombre" => $nombre,
            "apellido1" => $apellido1, 
            "apellido2"=>$apellido2, 
            "nomUser"=>$nomUser, 
            "DNI"=>$DNI, 
            "pass"=>$pass,
            "email"=>$email,
            "telefono"=>$telefono,
            "CP"=>$CP,
            "protectora"=>false,
            "submit"=>$submit
        ];

        $json = json_encode($registro);

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

    // OBTENER LOS DATOS DE USUARIO DURANTE EL REGISTRO 
    function obtenerDatosUsuarioRegistro( $nomUser, $DNI, $email, $telefono, $submit){
        $registro = [
            "nomUser"=>$nomUser, 
            "DNI"=>$DNI, 
            "email"=>$email,
            "telefono"=>$telefono,
            "submit"=>$submit
        ];

        $json = json_encode($registro);

        $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-registro-login/index.api.php";
  
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

        $output = curl_exec($curl);

        curl_close($curl);

        $usuario = json_decode($output, 1);
        
        return $usuario;

    };
    

?>