<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<html>
<head>
	<title>Blog de SnapDog</title>
</head>
<body>
	<h1>Últimos artículos</h1>
    <p>En este blog encontrarás noticias sobre adopciones de perros y gatos, consejos para el cuidado de mascotas y mucho más. ¡Únete a nuestra comunidad!</p>
    
    <h2>Últimas noticias</h2>
    <ul>
      <li><a href="#">Rescatamos a 10 perros de una perrera abandonada</a></li>
      <li><a href="#">Gata ciega encuentra su nuevo hogar/a></li>
      <li><a href="#">Celebramos nuestro primer aniversario</a></li>
    </ul>
    
    <h2>Consejos para el cuidado de mascotas</h2>
    <ul>
      <li><a href="#">Cómo elegir la comida adecuada para tu perro o gato</a></li>
      <li><a href="#">Consejos para prevenir pulgas y garrapatas</a></li>
      <li><a href="#">Ejercicios para mantener a tu perro en forma</a></li>
    </ul>
    
    <h2>Historias de adopción</h2>
    <ul>
      <li><a href="#">La historia de cómo adopté a mi perro</a></li>
      <li><a href="#">Gatos adoptados: De la calle a un hogar amoroso</a></li>
      <li><a href="#">Cómo ayudar a tu mascota a adaptarse a su nuevo hogar</a></li>
    </ul>
    
    <footer>
      <p>Síguenos en redes sociales:</p>
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
      </ul>
    </footer>
  </body>
</html>
	<?php
	// Realizar la solicitud GET a la API para obtener los últimos artículos
	$url = 'http://api-fuction.php'; 
	$response = file_get_contents($url);
	$articulos = json_decode($response);

	// Verificar si se han obtenido resultados
	if (!empty($articulos)) {
		// Mostrar cada artículo en la página
		foreach ($articulos as $articulo) {
			echo '<h2>' . $articulo->titulo . '</h2>';
			echo '<p>' . $articulo->contenido . '</p>';
			echo '<a href="ver_articulo.php?id=' . $articulo->id . '">Leer más</a>';
			echo '<hr>';
		}
	} else {
		// Mostrar un mensaje si no se han obtenido resultados
		echo '<p>No se encontraron artículos.</p>';
	}
	?>
	
	<h1>Noticias de animales de compañía</h1>

	<?php
	// Realizar la solicitud GET a la API para obtener las noticias de animales de compañía
	$url = 'http://api-noticias.php'; 
	$response = file_get_contents($url);
	$noticias = json_decode($response);

	// Verificar si se han obtenido resultados
	if (!empty($noticias)) {
		// Mostrar cada noticia en la página
		foreach ($noticias as $noticia) {
			echo '<h2>' . $noticia->titulo . '</h2>';
			echo '<p>' . $noticia->contenido . '</p>';
			echo '<a href="' . $noticia->url . '">Leer más</a>';
			echo '<hr>';
		}
	} else {
		// Mostrar un mensaje si no se han obtenido resultados
		echo '<p>No se encontraron noticias.</p>';
	}
	?>
	
</body>
</html>