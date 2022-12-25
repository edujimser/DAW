<?php
session_start();

// COOKIE------------------------------------------------------------------------------------------------------------
//CREAR COOKIE
function crearCookie($cookie_nombre, $cookie_valor, $tiempo, $renovaciónTiempo){
    //SI NO ESTA cREADA
    if (!isset($_COOKIE[$cookie_nombre])) {
        setcookie($cookie_nombre, $cookie_valor, time() + $tiempo);
    }else{
        //SOBREESCRITURA
        $_COOKIE[$cookie_nombre] =  $cookie_valor;
        eliminarCookie($cookie_nombre);
        setcookie($cookie_nombre, $cookie_valor, time() + $tiempo);
    };

    //RENOVACIÓN TIEMPO COOKIE
    if ($renovaciónTiempo) {
        eliminarCookie($cookie_nombre);
        setcookie($cookie_nombre, $cookie_valor, time() + $tiempo);
    };
};

//ELEMINAR COOKIE
function eliminarCookie($cookie_nombre){
    if (isset($_COOKIE[$cookie_nombre])) {
        unset($_COOKIE[$cookie_nombre]);
    };
};

// SESSIONS------------------------------------------------------------------------------------------------------------
//CREAR SESSIONS
function crearSession($session_nombre, $session_valor){
    if (!isset($_SESSION[$session_nombre])) {
        $_SESSION[$session_nombre] = $session_valor;
    }else{
        //SOBREESCRIBIR
        $_SESSION[$session_nombre] = $session_valor;
    };
};

//ELIMINAR SESSION
function eliminarSession($session_nombre){
    if (isset($_SESSION[$session_nombre])) {
        unset($_SESSION[$session_nombre]);
    };
};

?>