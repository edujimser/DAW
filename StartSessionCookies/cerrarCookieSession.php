<?php
    session_start();

    //BORRAR COOKIES
    if (isset($_COOKIE['idUser'])) {
        setcookie('idUser',time() - 60);
    };

    if (isset($_COOKIE['idUser'])) {
        setcookie('nomUser',time() - 60);
    }
 
    //BORRAR SESSION
    session_destroy();

    //REDIRIGIR
    header('Location: http://127.0.0.1/DAW/');

?>