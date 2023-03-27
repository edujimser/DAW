
<?php 
require_once './controlador/tarjetaPersonal.php';



// SI NO ESTÁ INICIADA LA SESSION REDIRIGIR AL LOGIN 
    if (!isset($_SESSION['idUser'])) {
        header("Location:http://127.0.0.1/DAW/php/login.php");
    }else{
       //COMPROBAR SI EL USUARIO QUE ACCEDE ES PROTECTORA 1: LO ES // 0: NO LO ES

        $datos = obtenerDatosUsuario($_SESSION['idUser']);

        if ($datos['0']['protectora'] == 1) {
            //OBTENER IDUSER Y DATOS
            $idUser = $_GET['idUser'];
            $datos = obtenerDatosUsuario($idUser);
            
        }else{
            $mensaje = "Los datos quedan restrigidos a los usuarios con caracter de protectora";
        }


    }
?>

