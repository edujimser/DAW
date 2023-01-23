
<?php
require './db.php';


function obtenerDatos()
{
    global $conexion;
    $tipoPerro = array();

    $datos = json_decode(file_get_contents('php://input'), true);

    // OBTENER DATOS DE PERRO 

    $sql = "SELECT tipoPerro FROM familiaPerro WHERE rangoMin <= ? AND rangoMax >= ?";
    $stm = $conexion->prepare($sql);
    $stm->bind_param('ii', $datos["sumatorioRespuestaMin"], $datos["sumatorioRespuestaMax"] );

    $stm->execute();
    $dato = $stm->get_result();

    if ($dato) {
        while ($fila = $dato->fetch_assoc()) {
            array_push($tipoPerro, $fila);
        };

        header("HTTP/1.1 200 OK");

        echo json_encode($tipoPerro);
    };
}
?>