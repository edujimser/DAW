<?php


function insertar($idUser, $nombreImagen, $imagen)
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
    $stmt = $db->prepare("INSERT INTO imagenusuario (idUser, nombreImagen, imagen) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $idUser, $nombreImagen, $imagen);
    $stmt->execute();
}


function actualizar($idUser, $nombreImagen, $imagen)
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
    
    //ACTUALIZAR IMAGEN
    $stmt = $db->prepare("UPDATE imagenusuario SET nombreImagen = ?, imagen = ? WHERE idUser = ?");
    $stmt->bind_param("ssi", $nombreImagen, $imagen,  $idUser);
    $stmt->execute();
}


function comprobar($idUser)
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
    $stmt = $db->prepare("SELECT * FROM imagenusuario WHERE idUser = ?");
    $stmt->bind_param("i", $idUser);
    $stmt->execute();

    //OBTENER RESULTADOS
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    //MOSTRAR RESULTADOS
    if ($num_rows > 0) {
        return true;
    }else{
        return false;
    }
};

function mostrar_imagen($idUser) {
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

    //CONSULTA PARA OBTENER LA IMAGEN
    $stmt = $db->prepare("SELECT imagen FROM imagenusuario WHERE idUser = ?");
    $stmt->bind_param("i", $idUser);
    $stmt->execute();
    $stmt->bind_result($imagen);

    //LEER IMAGEN
    if ($stmt->fetch()) {
        // Almacenar imagen en una variable
        ob_start();
        echo $imagen;
        $contenido_imagen = ob_get_clean();

        // Codificar imagen en base64
        $imagen_codificada = base64_encode($contenido_imagen);

        // Mostrar imagen en etiqueta img de HTML
        return $imagen_codificada;
    } else {
        echo "No se encontró la imagen con el ID especificado";
    }
    
    //Cerrar conexión
    $stmt->close();
    $db->close();
}


function mostrar_imagen_por_rango($inicio, $final) {
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

    //CONSULTA PARA OBTENER LA IMAGEN
    $stmt = $db->prepare("SELECT imagen FROM imagenusuario WHERE idUser >= ? AND idUser <= ?;");
    $stmt->bind_param("ii", $inicio, $final);
    $stmt->execute();
    $stmt->bind_result($imagen);
    
    $imagenes_codificadas = array(); // Array para almacenar las imágenes codificadas en base64

    while ($stmt->fetch()) {
        // Almacenar imagen en una variable
        ob_start();
        echo $imagen;
        $contenido_imagen = ob_get_clean();
    
        // Codificar imagen en base64
        $imagen_codificada = base64_encode($contenido_imagen);
    
        // Agregar imagen codificada al array
        $imagenes_codificadas[] = $imagen_codificada;
    };

        return $imagenes_codificadas;
    
    //Cerrar conexión
    $stmt->close();
    $db->close();
}







?>
