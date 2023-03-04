
<?php
require './db.php';


function obtenerDatos(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
   // OBTENER TODOS LOS DATOS DE USUARIO 
   if(isset($datos['todos'])){
  
    $sql = "SELECT * FROM usuario INNER JOIN datousuario ON usuario.iduser = datousuario.idUser INNER JOIN test ON usuario.idUser = test.idUser;";
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

   // OBTENER DATOS DE USUARIO 
   if(!isset($datos['todos'])){

    $sql = "SELECT * FROM usuario INNER JOIN datousuario ON usuario.iduser = datousuario.idUser INNER JOIN test ON usuario.idUser = test.idUser WHERE usuario.idUser >= ? AND usuario.idUser <= ?;";
    $stm = $conexion->prepare($sql);
    $stm->bind_param('ii', 
        $datos["usuarioRangoA"],
        $datos["usuarioRangoB"]); 
    
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
}

?>



