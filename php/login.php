
<?php

    require '../controlador/login.php';
    require './funciones/fucionesExternas.php';
    require_once '../StartSessionCookies/cookiesSesion.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'inicioSession')) {
      //OBTENER USUARIO SI EXISTE
      $usuario = obtenerDatosUsuario($_POST["email"], $_POST['pass'], $_POST['submit']);


   //VALIDACIÓN DE USUARIO
   if (empty($usuario)) {
      //ALERT HTML DE USUARIO NO EXISTE
      $mensajeRegistroFallido['vacio'] = 'no';

   }else{

      crearCookie("idUser", $usuario[0]["idUser"], 3600, false);
      crearCookie("nomUser", $usuario[0]["nomUser"], 3600, false);

      crearSession("idUser", $usuario[0]["idUser"]);
      crearSession("nomUser", $usuario[0]["nomUser"]);

      header('Location: http://127.0.0.1/DAW/');
   };
 };


require '../views/view.login.php';
?>