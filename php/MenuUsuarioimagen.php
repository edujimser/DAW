<?php session_start() ?>

<?php
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosImagen.php';


// RESPUESTA DEL POST 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES) ) {
    
    //MODIFICAR NOMBRE
    $nombreImagen = $_SESSION['nomUser'].".".explode(".", (string)$_FILES['foto']['name'])[1];
    $_FILES['foto']['name'] = $nombreImagen;
    $_FILES['foto']['full_path'] = $nombreImagen;

    $ruta = '../views/img/usuarios/'.$_FILES['foto']['name'];
    
    // VALIDACION
    $check  = @getimagesize($_FILES['foto']['tmp_name']); // VALIDACION

    if ($check !== false) {
        //COMPROBAR SI EXISTE EN LA BASE DE DATOS OTRA FOTO
        $existe = comprarexistencia($_SESSION['idUser']);
        
        if($existe == true){
            //BORRAR FOTOGRAFÍA SI EXISTE 
            borrarImagen($_SESSION['idUser']);
            // CARGA NUEVA FOTO EN LA BASE DE DATOS

            //CARGAR EN EL SERVER
            $verificacionArchivoCargaServer = move_uploaded_file($_FILES['foto']['tmp_name'], $ruta); // CARGAR O SOBRE ESCRIBE EN EL SERVIDOR
        }

    }
};


require '../views/viewMenuUsuarioImagen.php';
?>
