<?php 

require_once './controlador/datosUsuariosCompletos.php';

//PAGINACION
$usuarios_por_pagina = 2;
$pagina_actual = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
$inicio = ($pagina_actual > 1) ? (($pagina_actual * $usuarios_por_pagina + 1)- $usuarios_por_pagina) : 1;

    //OBTENER NUMERO DE PAGINAS TOTALES
    $num_paginas = 8;
    // OBTENER LA BASE DE DATOS FUNCIONA

?>