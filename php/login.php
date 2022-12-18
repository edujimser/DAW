
<?php

    require '../controlador/login.php';
    require './funciones/fucionesExternas.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'inicioSession')) {
   print_r($_POST);
    $user = obtenerDatosUsuario($_POST["email"], $_POST['pass'], $_POST['submit']);
    print_r($user);
 }


require '../views/view.login.php';
?>