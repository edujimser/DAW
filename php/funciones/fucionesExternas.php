<?php

    // LIMPIARDATOS FORMULARIO - SEGURIDAD CARACTERES INTRODUCIDOS
    function limpiarDatos($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    };



?>