<?php session_start() ?>

<?php 
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosTest.php';


// ENVIO CONTROLADOR FORMULARIO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'datosTest')) {


        // INSERTAR
        // COMPROBAR QUE EL USUARIO HA RELLENADO TODOS LOS CAMPOS
        if (($_POST['q1'] == '') || ($_POST['q2'] == '') || ($_POST['q3'] == '') ||
            ($_POST['q4'] == '') || ($_POST['q5'] == '') || ($_POST['q6'] == '') || ($_POST['q7'] == '') ||
            ($_POST['q8'] == '') || ($_POST['q9'] == '') || ($_POST['q10'] == ''))
        {

            $mensajeTestNoRellenado = "Todos los campos deben estar rellenos";
        } else {
            //PARA PROGRAMA PARA SPINER
            $datosTest = [];
            $datosTest  = insertarTest(
                limpiarDatos($_SESSION['idUser']),
                limpiarDatos($_POST['q1']),
                limpiarDatos($_POST['q2']),
                limpiarDatos($_POST['q3']),
                limpiarDatos($_POST['q4']),
                limpiarDatos($_POST['q5']),
                limpiarDatos($_POST['q6']),
                limpiarDatos($_POST['q7']),
                limpiarDatos($_POST['q8']),
                limpiarDatos($_POST['q9']),
                limpiarDatos($_POST['q10']),
                limpiarDatos($_POST['submit'])
            );

            //RECARGAR PAGINA PARA RELLENAR DATOS
            header("Location: http://127.0.0.1/DAW/php/MenuUsuarioTest.php");
        };

    }


require '../views/viewMenuUsuarioTest.php';
?>