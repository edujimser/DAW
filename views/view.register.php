<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://127.0.0.1/DAW/views/css/estilo.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <section class="registro">
        <div class="contenedor-formulario-registro">

            <div class="contenedor-imagen-registro">
                <img src="http://127.0.0.1/DAW/views/img/logo.png" alt="logo">
            </div>

            <form class="formulario-registro" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formulario-registro" >
                <div>
                    <div class="card-body p-md-5 text-black">

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" />
                                    <label class="form-label" for="nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="apellido1" name="apellido1" class="form-control form-control-lg" />
                                    <label class="form-label" for="apellido1">Primer Apellido</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="apellido2" name="apellido2" class="form-control form-control-lg" />
                                    <label class="form-label" for="apellido2">Segundo Apellido</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="nomUser" name="nomUser" class="form-control form-control-lg" />
                                    <label class="form-label" for="nomUser">Nick Usuario</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="DNI" name="DNI" class="form-control form-control-lg" />
                                    <label class="form-label" for="DNI">DNI o ID pasaporte</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
                                    <label class="form-label" for="pass">Contraseña</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="email">Correo Eléctronico</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="telefono" name="telefono" class="form-control form-control-lg" />
                            <label class="form-label" for="telefono">Teléfono de contacto</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="CP" name="CP" class="form-control form-control-lg" />
                            <label class="form-label" for="CP">Código Postal</label>
                        </div>

                        <div class="d-flex justify-content-center pt-3">
                            <button type="submit" name="submit" value="registro" class="btn fw-semibold btn-block mb-4">  Registrate  </button>
                        </div>

                        <div class="text-center">
                            <p> Tienes cuenta? <a href="./view.login.php">Inicia Sessión</a></p>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>