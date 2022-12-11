<?php
    require '../controlador/registro.php';
    require './funciones/fucionesExternas.php';

        // ENVIO CONTROLADOR FORMULARIO
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'registro')) {
            
            print_r($_POST);
            // COMPROBAR  EXISTENCIA USUARIO
            $usuario = [];
            $usuario  = obtenerDatosUsuarioRegistro( 
                limpiarDatos($_POST['nomUser']), 
                limpiarDatos($_POST['DNI']), 
                limpiarDatos($_POST['email']), 
                limpiarDatos($_POST['telefono']), 
                limpiarDatos($_POST['submit'])
            );


           if ($usuario) {
                echo 'el usuario existe';
                print_r($usuario);
            }else{
                //INSERTAR USUARIO
                insertarRegistro(
                    limpiarDatos($_POST['nombre']), 
                    limpiarDatos($_POST['apellido1']), 
                    limpiarDatos($_POST['apellido2']),
                    limpiarDatos($_POST['nomUser']),
                    limpiarDatos($_POST['DNI']),
                    limpiarDatos($_POST['pass']),
                    limpiarDatos($_POST['email']),
                    limpiarDatos($_POST['telefono']),
                    limpiarDatos($_POST['CP']),
                    limpiarDatos($_POST['submit'])
                );
            };
        };

    require '../views/view.register.php';

?>