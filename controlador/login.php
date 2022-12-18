<?php 

    // OBTENER LOS DATOS DE USUARIO DURANTE EL REGISTRO 
    function obtenerDatosUsuario( $email, $pass){

        $registro = [
            "email"=>$email, 
            "pass"=>$pass, 
        ];

        $json = json_encode($registro);

        $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-login/index.api.php";
  
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