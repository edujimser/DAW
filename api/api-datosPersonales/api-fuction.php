
<?php
require './db.php';

function insersionDatos(){
    global $conexion;

    $datos = json_decode(file_get_contents('php://input'), true);

    // INSERSIÓN DEL REGISTRO DEL USUARIO
    if($datos['submit'] == 'datosPersonales'){
        //INSERTAR
        if($datos['remplazar'] == false){
            $sql = "INSERT INTO datousuario(idUser, edad, estadoCivil, profesion, grupoFamiliar, metrosVivienda, tipoVivienda, estadoProfesional, rentaAnual, descripcionBusquedad, descripcionCompañero, hobbies ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stm = $conexion->prepare($sql);
            $stm->bind_param('iissiississs',
                                        $datos["idUser"],
                                        $datos["edad"],
                                        $datos["estadoCivil"],
                                        $datos["profesion"],
                                        $datos["grupoFamiliar"],
                                        $datos["metrosVivienda"],
                                        $datos["tipoVivienda"],
                                        $datos["estadoProfesional"],
                                        $datos["rentaAnual"],
                                        $datos["descripcionBusquedad"],
                                        $datos["descripcionCompañero"],
                                        $datos["hobbies"],
                                        ); 
            
            $resultado = $stm->execute();
    
            if ($resultado) {
                header("HTTP/1.1 200 OK");
            }else{
                header("HTTP/1.1 500 Internal Server Error");
            };
        }else{
        //REMPLAZAR
        $sql = "UPDATE datousuario SET edad = ?, estadoCivil = ?, profesion = ?, grupoFamiliar = ?, metrosVivienda = ?, tipoVivienda = ?, estadoProfesional = ?, rentaAnual = ?, descripcionBusquedad = ?, descripcionCompañero = ?, hobbies = ?  WHERE idUser = ?";
        $stm = $conexion->prepare($sql);
        $stm->bind_param('issiississsi',
                                    $datos["edad"],
                                    $datos["estadoCivil"],
                                    $datos["profesion"],
                                    $datos["grupoFamiliar"],
                                    $datos["metrosVivienda"],
                                    $datos["tipoVivienda"],
                                    $datos["estadoProfesional"],
                                    $datos["rentaAnual"],
                                    $datos["descripcionBusquedad"],
                                    $datos["descripcionCompañero"],
                                    $datos["hobbies"],
                                    $datos["idUser"]
                                    ); 
        
        $resultado = $stm->execute();

        if ($resultado) {
            header("HTTP/1.1 200 OK");
        }else{
            header("HTTP/1.1 500 Internal Server Error");
        };
        }
       
    };
};


function obtenerDatos(){
    global $conexion;
    $usuario = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
    // OBTENER DATOS DE USUARIO 

        $sql = "SELECT * FROM datousuario WHERE idUser = ?";
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



