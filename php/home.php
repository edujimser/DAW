<?php 

require_once './controlador/datosUsuariosCompletos.php';

$indiceArrayInicio = 0;

//PAGINACION
$usuarios_por_pagina = 8;
$pagina_actual = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
$inicio = ($pagina_actual > 1) ? (($pagina_actual * $usuarios_por_pagina + 1)- $usuarios_por_pagina) : 1;


    //OBTENER NUMERO DE PAGINAS TOTALES
    $i = count(obtenerDatosUsuarioTodos('todos'));
    $num_paginas = ceil($i / $usuarios_por_pagina);
    //OBTENER TODOS LOS DATOS USUARIOS AL CONTROLADOR
    $datosUsuarios = obtenerDatosUsuario($inicio, $inicio + $usuarios_por_pagina -1);
    print_r(obtenerDatosUsuarioTodos('todos'));


?>