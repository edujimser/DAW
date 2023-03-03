<?php session_start() ?>

<?php
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosTest.php';
require '../controlador/datosTipoPerro.php';

// COMPROBAR  EXISTENCIA USUARIO
$existe = obtenerDatos($_SESSION['idUser']);

//RELLENAR
if (!empty($existe)) {
    $q1 = $existe[0]['q1'];
    $q2 = $existe[0]['q2'];
    $q3 = $existe[0]['q3'];
    $q4 = $existe[0]['q4'];
    $q5 = $existe[0]['q5'];
    $q6 = $existe[0]['q6'];
    $q7 = $existe[0]['q7'];
    $q8 = $existe[0]['q8'];
    $q9 = $existe[0]['q9'];
    $q10 = $existe[0]['q10'];
}


// ENVIO CONTROLADOR FORMULARIO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'datosTest')) {


    // INSERTAR
    // COMPROBAR QUE EL USUARIO HA RELLENADO TODOS LOS CAMPOS
    if (($_POST['q1'] == '') || ($_POST['q2'] == '') || ($_POST['q3'] == '') ||
        ($_POST['q4'] == '') || ($_POST['q5'] == '') || ($_POST['q6'] == '') || ($_POST['q7'] == '') ||
        ($_POST['q8'] == '') || ($_POST['q9'] == '') || ($_POST['q10'] == '')
    ) {

        $mensajeTestNoRellenado = "Todos los campos deben estar rellenos";
    } else {
        //PARA PROGRAMA PARA SPINER

        // COMPROBAR EXISTENCIA PARA LA API
        if (empty($existe)) {  //INSERTAR
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
                limpiarDatos($_POST['submit']),
                'false',
                $tipoPerro = ($resultadoTipoPerro = (obtenerDatosTipoPerro( //TIPO PERRO
                                    (int)$_POST['q1'] +
                                    (int)$_POST['q2'] +
                                    (int)$_POST['q3'] +
                                    (int)$_POST['q4'] +
                                    (int)$_POST['q5'] +
                                    (int)$_POST['q6'] +
                                    (int)$_POST['q7'] +
                                    (int)$_POST['q8'] +
                                    (int)$_POST['q9'] +
                                    (int)$_POST['q10'])))['0']['tipoPerro']                       
                ); 
        } else { //ACTUALIZAR
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
                limpiarDatos($_POST['submit']),
                'true',
                $tipoPerro = ($resultadoTipoPerro = (obtenerDatosTipoPerro( //TIPO PERRO
                                    (int)$_POST['q1'] +
                                    (int)$_POST['q2'] +
                                    (int)$_POST['q3'] +
                                    (int)$_POST['q4'] +
                                    (int)$_POST['q5'] +
                                    (int)$_POST['q6'] +
                                    (int)$_POST['q7'] +
                                    (int)$_POST['q8'] +
                                    (int)$_POST['q9'] +
                                    (int)$_POST['q10'])))['0']['tipoPerro']                       
                ); 
        };

        //RECARGAR PAGINA PARA RELLENAR DATOS
        header("Location: http://127.0.0.1/DAW/php/MenuUsuarioTest.php");
    };
};

require '../views/viewMenuUsuarioTest.php';
?>