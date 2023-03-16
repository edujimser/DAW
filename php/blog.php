<?php
require '../views/bloques/nav.php';
?>
<?php
//LLAMA AL DISEÑO DEL BLOG (HTML - CSS)
require '../views/view.blog.php'
?>
<?php
require '../views/bloques/footer.php';
?>

<?php
// Verificar si los datos requeridos se han proporcionado
if (!empty($datos->nombre) && !empty($datos->contenido)) {
  $nombre = $datos->nombre;
  $contenido = $datos->contenido;
  $sql = "INSERT INTO comentarios (nombre, contenido, id_articulo) VALUES ('$nombre', '$contenido', $id_articulo)";

  // Verificar si el comentario ha sido creado correctamente
  if ($result) {
    // Devolver un mensaje de éxito
    http_response_code(201);
    echo json_encode(array('mensaje' => 'Comentario creado correctamente.'));
  } else {
    // Devolver un mensaje de error si ha habido algún problema
    http_response_code(500);
    echo json_encode(array('mensaje' => 'Ha habido un problema al crear el comentario.'));
  }
} else {
  // Devolver un mensaje de error si no se han proporcionado los datos requeridos
  http_response_code(400);
  echo json_encode(array('mensaje' => 'Por favor, proporcione un nombre y un contenido para el comentario.'));
}
// Verificar si los datos requeridos se han proporcionado
if (!empty($datos->titulo) && !empty($datos->contenido)) {
    $titulo = $datos->titulo;
    $contenido = $datos->contenido;
    $sql = "UPDATE articulos SET titulo = '$titulo', contenido = '$contenido' WHERE id = $id_articulo";
    $result = $conexion->query($sql);
  
    // Verificar si el artículo ha sido actualizado correctamente
    if ($result) {
      // Devolver un mensaje de éxito
      http_response_code(200);
      echo json_encode(array('mensaje' => 'Artículo actualizado correctamente.'));
    } else {
      // Devolver un mensaje de error si ha habido algún problema
      http_response_code(500);
      echo json_encode(array('mensaje' => 'Ha habido un problema al actualizar el artículo.'));
    }
  } else {
    // Devolver un mensaje de error si no se han proporcionado los datos requeridos
    http_response_code(400);
    echo json_encode(array('mensaje' => 'Por favor, proporcione un título y un contenido para el artículo.'));
  }
  
?>