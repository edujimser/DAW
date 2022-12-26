<?php
 require './api-fuction.php';
 
     switch ($_SERVER["REQUEST_METHOD"]) {  
        case 'POST':
            insersionDatos();
            break;
        case 'GET':
            obtenerDatos();
            break;
    };

?>