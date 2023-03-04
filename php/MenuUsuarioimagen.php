<?php session_start() ?>

<?php
require '../views/bloques/navUsuario.php';
require './funciones/fucionesExternas.php';
require '../controlador/datosImagen.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'] == 'datosImagen')){
    $revisar = getimagesize($_FILES["imagen"]["tmp_name"]);

    //INSERSIÓN DE IMAGEN
    if($revisar !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgenContenido = addslashes(file_get_contents($imagen));
        
        //ENVIAR DATOS A LA CONTROLADORA
        evniarImagenControlador($_SESSION['idUser'], $imgenContenido, false);
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}

obtenerImagenDelUsuario($_SESSION['idUser']);


require '../views/viewMenuUsuarioImagen.php';
?>