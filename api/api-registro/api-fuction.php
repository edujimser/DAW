<?php
require './db.php';

function insersionDatos(){
    global $conexion;

    $datos = json_decode(file_get_contents('php://input'), true);

    // INSERSIÓN DEL REGISTRO DEL USUARIO
    if($datos['submit'] == 'registro'){
   
        $sql = "INSERT INTO usuario(nomUser, DNI, pass, nombre, apellido1, apellido2, CP, email, telefono, protectora) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stm = $conexion->prepare($sql);
        $stm->bind_param('ssssssisii',
                                    $datos["nomUser"],
                                    $datos["DNI"],
                                    $datos["pass"],
                                    $datos["nombre"],
                                    $datos["apellido1"],
                                    $datos["apellido2"],
                                    $datos["CP"],
                                    $datos["email"],
                                    $datos["telefono"],
                                    $datos["protectora"]); 
        
        $resultado = $stm->execute();

        if ($resultado) {
            header("HTTP/1.1 200 OK");
        }else{
            header("HTTP/1.1 500 Internal Server Error");
        };
    };
};


function obtenerDatosUsuario(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
    // OBTENER DATOS DE USUARIO PARA REGISTRO
    if($datos['submit'] == 'registro'){
   
        $sql = "SELECT * FROM usuario WHERE nomUser = ? OR DNI = ? OR email = ? OR telefono = ?";
        $stm = $conexion->prepare($sql);
        $stm->bind_param('sssi',
                                    $datos["nomUser"],
                                    $datos["DNI"],
                                    $datos["email"],
                                    $datos["telefono"],); 
        
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


