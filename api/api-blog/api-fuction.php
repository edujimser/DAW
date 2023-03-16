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