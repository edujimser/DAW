<?php
 require './api-fuction.php';
 
     switch ($_SERVER["REQUEST_METHOD"]) {  
        case 'POST':
            insertarDatosRegistro();
            break;
        case 'GET':
            obtenerDatos();
            break;
    };

?>