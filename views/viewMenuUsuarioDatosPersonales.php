<div class='dashboard-app'>
    <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <div class='card-header'>
                    <h1>Datos Personales <?php echo $_SESSION['nomUser'] ?></h1>
                </div>
                <div class='card-body'>
                    <form class="formularioDatosPersonales" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formularioDatosPersonales" id="formularioDatosPersonales">
                        <div>
                            <div class="card-body p-md-5 text-black">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="edad" name="edad" class="form-control form-control-lg" />
                                            <label class="form-label" for="edad">Edad</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="estadoCivil" name="estadoCivil" class="form-control form-control-lg" />
                                            <label class="form-label" for="estadoCivil">Estado Civil</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="profesion" name="profesion" class="form-control form-control-lg" />
                                            <label class="form-label" for="profesion">Profesión</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="grupoFamiliar" name="grupoFamiliar" class="form-control form-control-lg" />
                                            <label class="form-label" for="grupoFamiliar">Número de unidad familiar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="metrosVivienda" name="metrosVivienda" class="form-control form-control-lg" />
                                            <label class="form-label" for="metrosVivienda">Metros vivienda</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="tipoVivienda" name="tipoVivienda" class="form-control form-control-lg" />
                                            <label class="form-label" for="tipoVivienda">Tipo de vivienda</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="estadoProfesional" name="estadoProfesional" class="form-control form-control-lg" />
                                            <label class="form-label" for="estadoProfesional">Estado Profesional</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="rentaAnual" name="rentaAnual" class="form-control form-control-lg" />
                                            <label class="form-label" for="rentaAnual">Renta Anual</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea type="text" id="descripcionBusquedad" name="descripcionBusquedad" class="form-control form-control-lg" rows="5"> </textarea>
                                    <label class="form-label" for="descripcionBusquedad">Descripción Busquedad</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea type="text" id="descripcionCompañero" name="descripcionCompañero" class="form-control form-control-lg" cols="30" rows="5"> </textarea>
                                    <label class="form-label" for="descripcionCompañero">Descripción Compañero</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea type="text" id="hobbies" name="hobbies" class="form-control form-control-lg" cols="30" rows="5"> </textarea>
                                    <label class="form-label" for="hobbies">Hobbies</label>
                                </div>


                                <div class="d-flex justify-content-center pt-3">
                                    <button type="submit" name="submit" id="submit" value="datosPersonales" class="btn fw-semibold btn-block mb-4"> Modificar </button>
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