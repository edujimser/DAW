

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://127.0.0.1/DAW/views/css/estilo.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Datos de Usuario</title>
</head>
<body>
<div class="contenedor-formulario">
    <form class="formulario-registro" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formulario-datos-usuario" id="formulario-datos-usuario" >
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
                                    <select class="form-control form-control-lg" name="estadoCivil" id="estadoCivil">
                                        <option value="" selected>Selecciona tu estado civil</option>
                                        <option value="soltero">Solter@</option>
                                        <option value="casado">Casad@</option>
                                        <option value="conviviente">Conviviente</option>
                                        <option value="separadoDivorciado">Separad@/Divorciad@</option>
                                        <option value="viudo">Viud@</option>
                                    </select>
                                    <label class="form-label" for="estadoCivil">Estado Civil</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="grupoFamiliar" name="grupoFamiliar" class="form-control form-control-lg" />
                                    <label class="form-label" for="grupoFamiliar">¿Cuantos sois en tu grupo familiar?</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <select class="form-control form-control-lg" name="estadoProfesional" id="estadoProfesional">
                                        <option value="" selected>Selecciona tu estado profesional</option>
                                        <option value="desempleado">Desempleado</option>
                                        <option value="empleadoCuentaAjena">Empleado por cuenta ajena</option>
                                        <option value="empleadoCuentaPropia">Empleado por cuenta propia (Autonomo)</option>
                                        <option value="jubilado">Jubilado</option>
                                    </select>
                                    <label class="form-label" for="estadoProfesional">Estado Profesional</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="metrosVivienda" name="metrosVivienda" class="form-control form-control-lg" />
                                    <label class="form-label" for="metrosVivienda">Metros de tu vivienda</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <select class="form-control form-control-lg" name="tipoVivienda" id="tipoVivienda">
                                        <option value="" selected>Selecciona tu tipo de vivienda</option>
                                        <option value="piso">Piso</option>
                                        <option value="unifamiliar">Vivienda unifamiliar</option>
                                        <option value="apartamento">Apartamento</option>
                                        <option value="estudio">Estudio</option>
                                        <option value="duplex">Duplex</option>
                                        <option value="bajo">Bajo con jardin</option>
                                    </select>
                                    <label class="form-label" for="tipoVivienda">Tipo de Vivienda</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-outline mb-4">
                                <input type="text" id="profesion" name="profesion" class="form-control form-control-lg" />
                                <label class="form-label" for="profesion">Cual es tu profesión</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="rentaAnual" name="rentaAnual" class="form-control form-control-lg" />
                                <label class="form-label" for="rentaAnual">¿Cual es tu renta anual?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-outline mb-4">
                                <input type="text" id="hobbies" name="hobbies" class="form-control form-control-lg" />
                                <label class="form-label" for="hobbies">¿Cuales son tus hobbies?</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="descripcionBusqueda" name="descripcionBusqueda" class="form-control form-control-lg" />
                                <label class="form-label" for="descripcionBusqueda">Dinos que estas buscando</label>
                            </div>
                        </div>
                        <div class="form-outline mb-4">
                                <input type="text" id="descripcionCompanero" name="descripcionCompanero" class="form-control form-control-lg"  style="WIDTH: 1425px; HEIGHT: 98px" size=32 />
                                <label class="form-label" for="descripcionCompanero">Describe a tu compañero ideal</label>
                            </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button type="submit" name="submit" id ="submit" value="registro" class="btn fw-semibold btn-block mb-4"> Aceptar </button>
                        </div>
                </div>
            </div>
        </form>
</div>
</body>
