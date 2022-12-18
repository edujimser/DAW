<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 9c79600374752277b42e60b8e7c92df760a35558
    require '../controlador/login.php';
    require './funciones/fucionesExternas.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'inicioSession')) {
    $user = obtenerDatosUsuario($_POST["email"], $_POST['pass']);
    print_r($user);
 }


require '../views/view.login.php';
?>