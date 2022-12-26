<?php session_start() ?>

<?php
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosUsuario.php';

// COMPROBAR  EXISTENCIA USUARIO
$existe = obtenerDatosUsuario($_SESSION['idUser']);

// ENVIO CONTROLADOR FORMULARIO
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'datosPersonales')) {

    if (empty($existe)) {
        // INSERTAR
        // COMPROBAR QUE EL USUARIO HA RELLENADO TODOS LOS CAMPOS
        if (($_POST['edad'] == 'edad') || ($_POST['estadoCivil'] == '') || ($_POST['profesion'] == '') ||
            ($_POST['grupoFamiliar'] == '') || ($_POST['metrosVivienda'] == '') || ($_POST['tipoVivienda'] == '') || ($_POST['estadoProfesional'] == '') ||
            ($_POST['rentaAnual'] == '') || ($_POST['descripcionBusquedad'] == '') || ($_POST['descripcionCompañero'] == '') || ($_POST['hobbies'] == '')
        ) {

            $mensajeRegistroCamposVacios = "Todos los campos deben estar rellenos";
        } else {
            //PARA PROGRAMA PARA SPINER
            //sleep(3);
            $datpsPersonales = [];
            $datpsPersonales  = insertarDatosPersonales(
                (int)limpiarDatos($_SESSION['idUser']),
                (int)limpiarDatos($_POST['edad']),
                limpiarDatos($_POST['estadoCivil']),
                limpiarDatos($_POST['profesion']),
                (int)limpiarDatos($_POST['grupoFamiliar']),
                (int)limpiarDatos($_POST['metrosVivienda']),
                limpiarDatos($_POST['tipoVivienda']),
                limpiarDatos($_POST['estadoProfesional']),
                (int)limpiarDatos($_POST['rentaAnual']),
                limpiarDatos($_POST['descripcionBusquedad']),
                limpiarDatos($_POST['descripcionCompañero']),
                limpiarDatos($_POST['hobbies']),
                limpiarDatos($_POST['submit']),
                false //remplazar
            );
        };
    } else {
        // REMPLAZAR
        // COMPROBAR QUE EL USUARIO HA RELLENADO TODOS LOS CAMPO
        if (($_POST['edad'] == 'edad') || ($_POST['estadoCivil'] == '') || ($_POST['profesion'] == '') ||
            ($_POST['grupoFamiliar'] == '') || ($_POST['metrosVivienda'] == '') || ($_POST['tipoVivienda'] == '') || ($_POST['estadoProfesional'] == '') ||
            ($_POST['rentaAnual'] == '') || ($_POST['descripcionBusquedad'] == '') || ($_POST['descripcionCompañero'] == '') || ($_POST['hobbies'] == '')
        ) {

            $mensajeRegistroCamposVacios = "Todos los campos deben estar rellenos";
        } else {
            //PARA PROGRAMA PARA SPINER
            //sleep(3);
            $datpsPersonales = [];
            $datpsPersonales  = insertarDatosPersonales(
                (int)limpiarDatos($existe[0]['idUser']),
                (int)limpiarDatos($_POST['edad']),
                limpiarDatos($_POST['estadoCivil']),
                limpiarDatos($_POST['profesion']),
                (int)limpiarDatos($_POST['grupoFamiliar']),
                (int)limpiarDatos($_POST['metrosVivienda']),
                limpiarDatos($_POST['tipoVivienda']),
                limpiarDatos($_POST['estadoProfesional']),
                (int)limpiarDatos($_POST['rentaAnual']),
                limpiarDatos($_POST['descripcionBusquedad']),
                limpiarDatos($_POST['descripcionCompañero']),
                limpiarDatos($_POST['hobbies']),
                limpiarDatos($_POST['submit']),
                true //remplazar
            );
        };
    }
};

require '../views/viewMenuUsuarioDatosPersonales.php';
?>