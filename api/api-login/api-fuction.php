
<?php
require './db.php';

function obtenerDatosUsuario(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
    // OBTENER DATOS DE USUARIO PARA REGISTRO
    if($datos['submit'] == 'registro'){
   
        $sql = "SELECT * FROM usuario WHERE email = ? AND pass = ?";
        $stm = $conexion->prepare($sql);
        $stm->bind_param('ss',
                $datos["email"],
                $datos["pass"]); 
        
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

