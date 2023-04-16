<?php
require './db.php';

function obtenerEntradas(){
    global $conexion;
    $entradas = array();

    $datos = json_decode(file_get_contents('php://input'), true);
  
   // OBTENER TODAS LAS ENTRADAS 
   if(isset($datos['todas'])){
  
    $sql = "SELECT * FROM entradas;";
    $stm = $conexion->prepare($sql);
    $stm->execute();
    $dato = $stm->get_result();

     if ($dato) {
         while ($fila = $dato->fetch_assoc()) {
             array_push($entradas, $fila);
         };

         header("HTTP/1.1 200 OK");
         
         echo json_encode($entradas); 

     };
   };

   // OBTENER ENTRADAS POR CATEGORÍA 
   if(isset($datos['categoria'])){

    $sql = "SELECT * FROM entradas WHERE categoria = ?;";
    $stm = $conexion->prepare($sql);
    $stm->bind_param('s', $datos["categoria"]); 
    
   $stm->execute();
   $dato = $stm->get_result();

    if ($dato) {
        while ($fila = $dato->fetch_assoc()) {
            array_push($entradas, $fila);
        };

        header("HTTP/1.1 200 OK");
        
        echo json_encode($entradas); 

    };
  };
// OBTENER ÚLTIMAS NOTICIAS SOBRE GATOS Y PERROS
if(isset($datos['ultimas_noticias'])){

    $noticias = array();

    // Obtener últimas noticias sobre gatos
    $sql_gatos = "SELECT * FROM entradas WHERE noticias_gatos IS NOT NULL ORDER BY fecha DESC LIMIT 3;";
    $stm_gatos = $conexion->prepare($sql_gatos);
    $stm_gatos->execute();
    $dato_gatos = $stm_gatos->get_result();

    if ($dato_gatos) {
        while ($fila_gatos = $dato_gatos->fetch_assoc()) {
            array_push($noticias, $fila_gatos);
        }
    }

    // Obtener últimas noticias sobre perros
    $sql_perros = "SELECT * FROM entradas WHERE noticias_perros IS NOT NULL ORDER BY fecha DESC LIMIT 3;";
    $stm_perros = $conexion->prepare($sql_perros);
    $stm_perros->execute();
    $dato_perros = $stm_perros->get_result();

    if ($dato_perros) {
        while ($fila_perros = $dato_perros->fetch_assoc()) {
            array_push($noticias, $fila_perros);
        }
    }

    // Ordenar noticias por fecha
    usort($noticias, function($a, $b) {
        return strtotime($b['fecha']) - strtotime($a['fecha']);
    });

    header("HTTP/1.1 200 OK");
        
    echo json_encode($noticias); 
};
  // OBTENER ENTRADAS POR TÍTULO
  if(isset($datos['titulo'])){

    $sql = "SELECT * FROM entradas WHERE titulo LIKE ?;";
    $stm = $conexion->prepare($sql);
    $stm->bind_param('s', '%'.$datos["titulo"].'%'); 
    
   $stm->execute();
   $dato = $stm->get_result();

    if ($dato) {
        while ($fila = $dato->fetch_assoc()) {
            array_push($entradas, $fila);
        };

        header("HTTP/1.1 200 OK");
        
        echo json_encode($entradas); 

    };
  };
}