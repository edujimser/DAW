<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'principal');

    if ($conexion->connect_errno) {
        global $conexion;
        printf("ERROR:", $conexion->connect_errno);
    }


?>