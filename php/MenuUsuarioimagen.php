<?php session_start() ?>

<?php
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosImagen.php';

//INSERTAR IMAGEN EN EL HTML SI EXISTE EN LA BASE DE DATOS 
 if (!empty(mostrar_imagen($_SESSION["idUser"]))) {
    $imagen_codificada = mostrar_imagen($_SESSION["idUser"]);
 }


// RESPUESTA DEL POST 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES['foto']['tmp_name']) ) {

    $nombre_imagen =  $_FILES['foto']['name'];

    //VALIDACION
    $check  = @getimagesize($_FILES['foto']['tmp_name']); // VALIDACION

    if ($check !== false) {
        //COMPROBAR SI EXISTE EN LA BASE DE DATOS OTRA FOTO (PARA INSERTAR O ACTUALIZAR)
          $existe = comprobar($_SESSION['idUser']);

        //INSERTAR DATOS IMAGEN EN LA BASE DE DATOS Y EN APACHE
            if ($existe == false) {
                // Obtener la imagen desde el formulario
                $imagen = $_FILES['foto']['tmp_name'];

                // Convertir la imagen a BLOB
                $contenido_imagen = file_get_contents($imagen);

                //Insertar
                insertar($_SESSION['idUser'], $nombre_imagen, $contenido_imagen);

                //Actualiza pagina
                header('Location: http://127.0.0.1/DAW/php/MenuUsuarioImagen.php');
            };
            
        //ACTUALIZAR DATOS DE LA IMAGEN
            if ($existe == true) {
                // Obtener la imagen desde el formulario
                $imagen = $_FILES['foto']['tmp_name'];

                // Convertir la imagen a BLOB
                $contenido_imagen = file_get_contents($imagen);

                //Actualizar
                actualizar($_SESSION['idUser'], $nombre_imagen, $contenido_imagen);

                //Actualiza pagina
                header('Location: http://127.0.0.1/DAW/php/MenuUsuarioImagen.php');
                
            };
    }


};


require '../views/viewMenuUsuarioImagen.php';
?>
