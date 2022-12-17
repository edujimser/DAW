<?php

// ESTABLECE EL VALOR Y NOMBRE DE LA COOKIE
$cookie_name = "nomUser";
$cookie_value = "Marcos García";

// ESTABLECE EL TIEMPO DE EXPIRACIÓN A UNA HORA A PARTIR DE AHORA
$expire = time() + 3600;

// RUTA Y DOMINIO DE LA COOKIE
$ruta = '/cookies/';
$dominio = "SnapDog.com";

// SOLO ENVÍA LA COOKIE CON CONEXIÓN HTTPS
$seguridad = false;

// COOKIE DISPONIBLE SÓLO PARA EL PROTOCOLO HTTP
$solohttp = true;

// ESTABLECER LA COOKIE
setcookie($cookie_name, $cookie_value, $expire, $ruta, $dominio, $seguridad, $solohttp);


// RECUPERAR EL VALOR DE LA COOKIE "usuario"
$nomUser = $_COOKIE["nomUser"];

echo "Bienvenido, $nomUser";

?>