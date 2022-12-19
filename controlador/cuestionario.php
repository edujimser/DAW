<?php 

    function insertarCuestionario($vivienda, $niños, $mascotas, $experiencia, $ayuda, $licencia, $actividad, $adopcion, $agree){

        $cuestionario = [
            "vivienda" => $vivienda,
            "niños" => $niños,
            "mascotas" => $mascotas,
            "experiencia" => $experiencia,
            "ayuda" => $ayuda,
            "licencia" => $licencia,
            "actividad" => $actividad,
            "adopcion"=> $adopcion,
            "agree" => $agree
        ];

        $json = json_encode($cuestionario);

        $endpoint = "http://" . $_SERVER['HTTP_HOST'] . "/DAW/api/api-registro-login/index.api.php";
  
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

        curl_exec($curl);

        curl_close($curl);
    }

?>