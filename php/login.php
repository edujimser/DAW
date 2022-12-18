
<?php

    require '../controlador/login.php';
    require './funciones/fucionesExternas.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'inicioSession')) {
      //OBTENER USUARIO SI EXISTE
      $usario = obtenerDatosUsuario($_POST["email"], $_POST['pass'], $_POST['submit']);
   
   //VALIDACIÓN DE USUARIO
   if (empty($usario)) {
      //ALERT HTML DE USUARIO NO EXISTE
      $mensajeRegistroFallido['vacio'] = 'no';
   }else{
      //CREAR SESSION Y COOKIES
         //CREARSESSION()
         //CREARCOOKIES()
      //REDIGIR A EL HOME
      print_r($usario);
   };
 };


require '../views/view.login.php';
?>