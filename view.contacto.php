<!doctype html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Contacto">
        <title>Formulario de contacto</title>
        </head>

        <body>
        <main role="main" class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Gracias por contactarnos</h1>
                </div>
                <div class="col-12">
                    <form method="POST" action="contacto.php">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" required type="text" id="nombre"
                                class="form-control" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input name="email" required type="email" id="email"
                                class="form-control" placeholder="Tu correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea required placeholder="Escribe tu mensaje"
                                class="form-control" name="mensaje" id="mensaje"
                                cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-success btn" type="submit">
                                Enviar!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>