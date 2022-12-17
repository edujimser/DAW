<?php

// CONEXIÓN A LA BASE DE DATOS
$db = mysqli_connect("localhost", "username", "password", "database_name");

// COMPROBAMOS SI SE HA ENVIADO EL FORMULARIO DE ACCESO
if (isset($_POST["login"])) {
  // Recuperar el nombre de usuario y la contraseña del formulario
  $username = $_POST["username"];
  $password = $_POST["password"];

  // COMPROBAMOS SI EL NOMBRE DE USUARIO Y LA CONTRASEÑA SON CORRECTOS
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) == 1) {

    // INICIÓ DE SESIÓN CON EXITO
    $user = mysqli_fetch_assoc($result);
    $user_id = $user["id"];

    //  Establece el ID de usuario como variable de sesión
    $_SESSION["user_id"] = $user_id;

    //  Redirigir al usuario a la página de inicio
    header("Location: home.php");
  } else {
    // CONEXIÓN NO ACEPTADA
    $error = "Conexión no acepta, el usuario o la contraseña son inválidos.";
  }
}

?>
