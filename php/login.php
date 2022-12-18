
<?php

    require '../controlador/login.php';
    require './funciones/fucionesExternas.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'inicioSession')) {
    $user = obtenerDatosUsuario($_POST["email"], $_POST['pass']);
    print_r($user);
 }


require '../views/view.login.php';
?>