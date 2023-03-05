<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://127.0.0.1/DAW/views/css/estilo.css" type="text/css">
    <link rel="stylesheet" href="http://127.0.0.1/DAW/views/css/sweetalert2.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Registro</title>
</head>

<body>

    <section class="registro">
        <div class="contenedor-formulario-registro">

            <div class="contenedor-imagen-registro">
                <img src="http://127.0.0.1/DAW/views/img/logo.png" alt="logo">
            </div>

            <form class="formulario-registro" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formulario-registro" id="formulario-registro" >
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
                                    <input type="password" id="pass" name="pass" class="form-control form-control-lg" required />
                                    <label class="form-label" for="pass">Password</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="email">Correo Eléctronico</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" id="telefono" name="telefono" class="form-control form-control-lg" />
                            <label class="form-label" for="telefono">Teléfono de contacto</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" id="CP" name="CP" class="form-control form-control-lg" />
                            <label class="form-label" for="CP">Código Postal</label>
                        </div>
                        <!-- ALERTS CAMPOS VACIOS -->
                        <?php if(isset($mensajeRegistroCamposVacios)) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                </symbol>
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                            </svg>
                            <!-- -->
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                        <?php echo $mensajeRegistroCamposVacios;?>
                                    </div>
                                </div>  
                        <?php endif; ?>
                        <!-- ALERTS CAMPOS VACIOS -->

                        <!-- ALERTS USUARIO EXISTE -->
                        <?php if(isset($mensajeRegistroFallido)) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                </symbol>
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                            </svg>
                            <!-- NOMUSER-->
                            <?php if(isset($mensajeRegistroFallido['nomUser'])) : ?>
                                <div class="alert alert-warning d-flex align-items-center" role="alert" id ="mensajeErrorDatoDuplicadoDB"> 
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    El Nick del Usuario ya existe
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- DNI-->
                            <?php if(isset($mensajeRegistroFallido['DNI'])) : ?>
                                <div class="alert alert-warning d-flex align-items-center" role="alert" id ="mensajeErrorDatoDuplicadoDB">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    El DNI del Usuario ya existe
                                </div>
                            </div>
                            <?php endif; ?> 
                            <!-- EMAIL-->
                            <?php if(isset($mensajeRegistroFallido['email'])) : ?>
                                <div class="alert alert-warning d-flex align-items-center" role="alert" id ="mensajeErrorDatoDuplicadoDB">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    El email del Usuario ya existe
                                </div>
                            </div>
                            <?php endif; ?>  
                            <!-- EMAIL-->
                            <?php if(isset($mensajeRegistroFallido['telefono'])) : ?>
                                <div class="alert alert-warning d-flex align-items-center" role="alert" id ="mensajeErrorDatoDuplicadoDB">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    El teleéfono del Usuario ya existe
                                </div>
                            </div>
                            <?php endif; ?>  
                        <?php endif; ?>
                        <!-- ALERTS USUARIO EXISTE -->       
                        <!-- SNIPPER -->
                        <div id="contendor-snipper">

                        </div>
                        <!-- SNIPPER --> 
                        <div class="d-flex justify-content-center pt-3 contendor-boton">
                            <button type="submit" name="submit" id ="submit" value="registro" class="btn fw-semibold btn-block mb-4"> Registrate </button>
                        </div>

                        <div class="text-center">
                            <p> Tienes cuenta? <a href="http://127.0.0.1/DAW/php/login.php">Iniciar Sessión</a></p>
                            <p>Volver a la <a href="http://127.0.0.1/DAW/index.php">Home</a></p>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </section>
    <script src="http://127.0.0.1/DAW/js/registro.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>