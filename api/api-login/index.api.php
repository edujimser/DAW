<?php
 require './api-fuction.php';
 
     switch ($_SERVER["REQUEST_METHOD"]) {  
        case 'GET':
            obtenerDatosUsuario();
            break;
    };

?>