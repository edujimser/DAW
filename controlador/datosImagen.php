<?php

// INSERTAR IMAGEN USUARIO
function evniarImagenControlador($idUser, $imgContenido, $estado)
{
    //CREDENCIALES
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'principal';

    //CONEXION
    $db = new mysqli($Host, $Username, $Password, $dbName);

    // VALIDAR CONEXION
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //INSERTAR IMAGEN
    $db->query("INSERT into imagenusuario (idUser, imagenes) VALUES ('$idUser','$imgContenido')");

};

function obtenerImagenDelUsuario($idUser){
    //CREDENCIALES
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'principal';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT imagenes FROM imagenusuario WHERE idUser = $idUser");
    print_r($result);
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagenes']; 
    }else{
        echo 'Imagen no existe...';
    }
}

?>
