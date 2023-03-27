<?php
session_start();
?>
<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'bloques/nav.php';
?>

<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'php/tarjetaPersonal.php';
?>


 <!-- DATOS -->
<?php if(isset($mensaje)): ?>
   <section>
    <div class="contenedorMensajeTarjeta">
       <div class="mensajeTarjeta">
          <p class="texto"><?php echo  $mensaje ?></p>
          <div class="contendorBotonTexto">
             <button class="botonTarjeta btn fw-semibold mb-4"><a href="http://127.0.0.1/DAW/index.php">Volver a la Home</a></button>
          </div>
       </div>
    </div>
 </section>
<?php else: ?>
    <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-body'>
                        <form class="formularioDatosPersonales" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formularioDatosPersonales" id="formularioDatosPersonales">
                        <div>
                            <div class="card-body p-md-5 text-black">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="nombre" name="nombre" value="<?php if(isset($datos[0]['nomUser'])): echo $datos[0]['nomUser']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="nombre">Nombre Usuario</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['nombre'])): echo $datos[0]['nombre']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido2" name="apellido2" value="<?php if(isset($datos[0]['apellido1'])): echo $datos[0]['apellido1']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido2">Primer Apellido</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="nomUser" name="nomUser" disabled="disabled" value="<?php if(isset($datos[0]['apellido2'])): echo $datos[0]['apellido2']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="nomUser">Segundo Apellido</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="DNI" name="DNI" disabled="disabled"  value="<?php if(isset($datos[0]['DNI'])): echo $datos[0]['DNI']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="DNI">DNI</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="pass" name="pass" disabled="disabled"  value="<?php if(isset($datos[0]['CP'])): echo $datos[0]['CP']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="pass">Dirección Postal</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="email" id="email" name="email" disabled="disabled"  value="<?php if(isset($datos[0]['email'])): echo $datos[0]['email']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Correo Eléctronico</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="telefono" name="telefono" disabled="disabled"  value="<?php if(isset($datos[0]['telefono'])): echo $datos[0]['telefono']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="telefono">Teléfono de contacto</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="CP" name="CP" value="<?php if(isset($datos[0]['edad'])): echo $datos[0]['edad']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Edad</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="CP" name="CP" value="<?php if(isset($datos[0]['rentaAnual'])): echo $datos[0]['rentaAnual']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Renta Anual</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="CP" name="CP" value="<?php if(isset($datos[0]['estadoProfesional'])): echo $datos[0]['estadoProfesional']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Situación laboral</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="CP" name="CP" value="<?php if(isset($datos[0]['tipoVivienda'])): echo $datos[0]['tipoVivienda']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Situación laboral</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="CP" name="CP" value="<?php if(isset($datos[0]['metrosVivienda'])): echo $datos[0]['metrosVivienda']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Metros Vivienda</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="CP" name="CP" value="<?php if(isset($datos[0]['profesion'])): echo $datos[0]['profesion']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Profesion</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="CP" name="CP" value="<?php if(isset($datos[0]['grupoFamiliar'])): echo $datos[0]['grupoFamiliar']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Grupo familiar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="CP" name="CP" value="<?php if(isset($datos[0]['estadoCivil'])): echo $datos[0]['estadoCivil']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="CP">Grupo familiar</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea type="text" id="descripcionBusquedad" name="descripcionBusquedad" class="form-control form-control-lg" rows="5"> <?php if(isset($datos[0]['hobbies'])): echo $datos[0]['hobbies']; ?><?php endif;?></textarea>
                                    <label class="form-label" for="descripcionBusquedad">Descripción Busquedad</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea type="text" id="descripcionBusquedad" name="descripcionBusquedad" class="form-control form-control-lg" rows="5"> <?php if(isset($datos[0]['descripcionCompañero'])): echo $datos[0]['descripcionCompañero']; ?><?php endif;?></textarea>
                                    <label class="form-label" for="descripcionBusquedad">Descripción del compañero perruno</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea type="text" id="descripcionBusquedad" name="descripcionBusquedad" class="form-control form-control-lg" rows="5"> <?php if(isset($datos[0]['descripcionBusquedad'])): echo $datos[0]['descripcionBusquedad']; ?><?php endif;?></textarea>
                                    <label class="form-label" for="descripcionBusquedad">Descripción de busquedad del compañero perruno</label>
                                </div>

                                <div class="row">
                                     <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q1'])): echo $datos[0]['q1']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q2'])): echo $datos[0]['q2']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q3'])): echo $datos[0]['q3']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 3</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q4'])): echo $datos[0]['q4']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 4</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q5'])): echo $datos[0]['q5']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 5</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q6'])): echo $datos[0]['q6']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 6</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q7'])): echo $datos[0]['q7']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 7</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q8'])): echo $datos[0]['q8']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 8</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q9'])): echo $datos[0]['q9']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 9</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="apellido1" name="apellido1" value="<?php if(isset($datos[0]['q10'])): echo $datos[0]['q9']; ?><?php endif;?>" class="form-control form-control-lg" />
                                            <label class="form-label" for="apellido1">Respuesta Test Pretunga 10</label>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="form-outline mb-4">
                                    <textarea type="text" id="descripcionBusquedad" name="descripcionBusquedad" class="form-control form-control-lg" rows="5"> <?php if(isset($datos[0]['tipoPerro'])): echo $datos[0]['tipoPerro']; ?><?php endif;?></textarea>
                                    <label class="form-label" for="descripcionBusquedad">Resultado Test</label>
                                </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <script src="http://127.0.0.1/DAW/js/menuUsuario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'bloques/footer.php';
?>