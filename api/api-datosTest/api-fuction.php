
<?php
require './db.php';

function insersionDatos(){
    global $conexion;

    $datos = json_decode(file_get_contents('php://input'), true);

    // INSERSIÓN DEL REGISTRO DEL USUARIO
    if($datos['submit'] == 'datosTest'){
            $sql = "INSERT INTO test(idUser, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stm = $conexion->prepare($sql);
            $stm->bind_param('issssssssss',
                                        $datos["idUser"],
                                        $datos["q1"],
                                        $datos["q2"],
                                        $datos["q3"],
                                        $datos["q4"],
                                        $datos["q5"],
                                        $datos["q6"],
                                        $datos["q7"],
                                        $datos["q8"],
                                        $datos["q9"],
                                        $datos["q10"],
                                        ); 
            
            $resultado = $stm->execute();
    
            if ($resultado) {
                header("HTTP/1.1 200 OK");
            }else{
                header("HTTP/1.1 500 Internal Server Error");
            };
    };
};
?>