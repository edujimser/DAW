<?php
    require '../controlador/registro.php';
    require './funciones/fucionesExternas.php';

        // ENVIO CONTROLADOR FORMULARIO
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'registro')) {
            
            // COMPROBAR QUE EEL USUARIO HA RELLENADO TODOS LOS CAMPOS
            if (($_POST['nombre'] == '') || ($_POST['apellido1'] == '') || ($_POST['apellido2'] == '') || ($_POST['nomUser'] == '') || ($_POST['DNI'] == '') || ($_POST['pass'] == '') || ($_POST['email'] == '') || ($_POST['telefono'] == '') || ($_POST['CP'] == '')) {
                
                $mensajeRegistroCamposVacios = "Todos los campos deben estar rellenos";

            }else{
                // COMPROBAR  EXISTENCIA USUARIO
                $usuario = [];
                $usuario  = obtenerDatosUsuarioRegistro( 
                    limpiarDatos($_POST['nomUser']), 
                    limpiarDatos($_POST['DNI']), 
                    limpiarDatos($_POST['email']), 
                    limpiarDatos($_POST['telefono']), 
                    limpiarDatos($_POST['submit'])
                );

                if (isset($usuario)) {
                        
                        $mensajeRegistroFallido = [];

                        //ELEMINAR MENSAJES YA EXISTENTES
                        //DESARROLLADO EN JAVASCRIPT CON id  = "mensajeErrorDatoDuplicadoDB" function elminarMensajeErrorDatoDuplicadoDB()

                        //MENSAJE PARA EL USUARIO EN EL REGISTRO YA EXISTE EN LA BASE DE DATOS
                    foreach ($usuario as $index => $dato) {
                            if(isset($usuario[$index]['nomUser']) == $_POST['nomUser']){
                                $mensajeRegistroFallido["nomUser"] = $usuario[$index]['nomUser'];
                            };
                        
                            if($usuario[$index]['DNI'] == $_POST['DNI']){
                                $mensajeRegistroFallido["DNI"] = $usuario[$index]['DNI'];
                            };  
                            
                            if($usuario[$index]['email'] == $_POST['email']){
                                $mensajeRegistroFallido["email"] = $usuario[$index]['email'];
                            };  

                            if($usuario[$index]['telefono'] == $_POST['telefono']){
                                $mensajeRegistroFallido["telefono"] = $usuario[$index]['telefono'];
                            };  
                        };
                    
                    }else{
                        //INSERTAR USUARIO
                        insertarRegistro(
                            limpiarDatos($_POST['nombre']), 
                            limpiarDatos($_POST['apellido1']), 
                            limpiarDatos($_POST['apellido1']),
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
        };

    require '../views/view.register.php';
