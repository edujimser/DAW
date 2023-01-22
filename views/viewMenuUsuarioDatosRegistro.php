
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-header'>
                            <h1>Datos Registro <?php echo $_SESSION['nomUser']?></h1>
                        </div>
                        <div class='card-body'>
                        <form class="formularioDatosPersonales" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formularioDatosPersonales" id="formularioDatosPersonales">
                        <div>
                            <div class="card-body p-md-5 text-black">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="nombre" name="nombre" value="<?php if(isset($nombre)): echo $nombre; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($apellido1)): echo $apellido1; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Primer Apellido</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido2" name="apellido2" value="<?php if(isset($apellido2)): echo $apellido2; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido2">Segundo Apellido</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="nomUser" name="nomUser" disabled="disabled" value="<?php if(isset($nomUser)): echo $nomUser; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="nomUser">Nick Usuario</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="DNI" name="DNI" disabled="disabled"  value="<?php if(isset($DNI)): echo $DNI; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="DNI">DNI</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="pass" name="pass" disabled="disabled"  value="<?php if(isset($pass)): echo $pass; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="pass">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="email" id="email" name="email" disabled="disabled"  value="<?php if(isset($email)): echo $email; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Correo Eléctronico</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="telefono" name="telefono" disabled="disabled"  value="<?php if(isset($telefono)): echo $telefono; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="telefono">Teléfono de contacto</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="CP" name="CP" value="<?php if(isset($CP)): echo $CP; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Código Postal</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center pt-3">
                                    <button type="submit" name="submit" id="submit" value="datosRegistro" class="btn fw-semibold btn-block mb-4"> Modificar </button>
                                </div>

                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://127.0.0.1/DAW/js/menuUsuario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>