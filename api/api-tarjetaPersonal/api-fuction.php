
<?php
require './db.php';


function obtenerDatos(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  

    $sql = "SELECT * FROM usuario INNER JOIN datousuario ON usuario.iduser = datousuario.idUser INNER JOIN test ON usuario.idUser = test.idUser WHERE usuario.idUser = ?;";
    $stm = $conexion->prepare($sql);
    $stm->bind_param('i', $datos["idUser"]);
    
   $stm->execute();
   $dato = $stm->get_result();

    if ($dato) {
        while ($fila = $dato->fetch_assoc()) {
            array_push($usuario, $fila);
        };

        header("HTTP/1.1 200 OK");
        
        echo json_encode($usuario); 

    };
  };

?>



