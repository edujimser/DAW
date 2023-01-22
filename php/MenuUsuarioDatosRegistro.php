<?php session_start() ?>

<?php 
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosRegistro.php';

// COMPROBAR  EXISTENCIA USUARIO
$existe = obtenerDatosUsuario($_SESSION['idUser']);


//RELLENAR DATOS DE FORMULARIO SI EXISTEN

if(!empty($existe)){
    $nomUser = $existe[0]['nomUser'];
    $DNI = $existe[0]['DNI'];
    $pass = $existe[0]['pass'];
    $nombre = $existe[0]['nombre'];
    $apellido1 = $existe[0]['apellido1'];
    $apellido2 = $existe[0]['apellido2'];
    $CP = $existe[0]['CP'];
    $email = $existe[0]['email'];
    $telefono = $existe[0]['telefono'];
};

// ENVIO CONTROLADOR FORMULARIO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'datosRegistro')) {

        // COMPROBAR QUE EL USUARIO HA RELLENADO TODOS LOS CAMPOS
        if (($_POST['nombre'] == '') || ($_POST['apellido1'] == '') || ($_POST['apellido2'] == '') ||
            ($_POST['CP'] == '') ) {

            $mensajeRegistroCamposVacios = "Todos los campos deben estar rellenos";
        } else {
            //PARA PROGRAMA PARA SPINER
            //sleep(3);
            $datosRegistro = [];
            $datosRegistro  = insertarDatosRegistro(
                (int)limpiarDatos($_SESSION['idUser']),
                limpiarDatos($_POST['nombre']),
                limpiarDatos($_POST['apellido1']),
                limpiarDatos($_POST['apellido2']),
                (int)limpiarDatos($_POST['CP']),
                limpiarDatos($_POST['submit']),
               
            );

            print_r($datosRegistro);
            //RECARGAR PAGINA PARA RELLENAR DATOS
            header("Location: http://127.0.0.1/DAW/php/MenuUsuarioDatosRegistro.php");
        };
};


        
require '../views/viewMenuUsuarioDatosRegistro.php';
?>