
<?php
require './db.php';

function insertarDatosRegistro(){
    global $conexion;

    $datos = json_decode(file_get_contents('php://input'), true);

    // MODIFICACION DEL REGISTRO DEL USUARIO
    if($datos['submit'] == 'datosRegistro'){
        $sql = "UPDATE usuario SET  nombre = ?, apellido1 = ?, apellido2 = ?, CP = ?  WHERE idUser = ?";
        $stm = $conexion->prepare($sql);
        $stm->bind_param('sssii',
                                    
                                    $datos["nombre"],
                                    $datos["apellido1"],
                                    $datos["apellido2"],
                                    $datos["CP"],
                                    $datos["idUser"]
                                    ); 
        
        $resultado = $stm->execute();

        if ($resultado) {
            header("HTTP/1.1 200 OK");
        }else{
            header("HTTP/1.1 500 Internal Server Error");
        };

        };
       
    };


function obtenerDatos(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
    // OBTENER DATOS DE USUARIO 

        $sql = "SELECT * FROM usuario WHERE idUser = ?";
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
}

?>



