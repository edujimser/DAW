<<<<<<< HEAD
<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'principal');

    if ($conexion->connect_errno) {
        global $conexion;
        printf("ERROR:", $conexion->connect_errno);
    }


=======
<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'principal');

    if ($conexion->connect_errno) {
        global $conexion;
        printf("ERROR:", $conexion->connect_errno);
    }


>>>>>>> 9c79600374752277b42e60b8e7c92df760a35558
?>