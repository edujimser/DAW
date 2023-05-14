
<?php
require './db.php';


function obtenerDatos(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
   // OBTENER DEL BLOG
  
    $sql = "SELECT * FROM blog";
    $stm = $conexion->prepare($sql);
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



