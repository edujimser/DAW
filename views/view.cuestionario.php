<?php 

require "../controlador/cuestionario.php";

if(isset($_POST["submit"])){
    global $cuestionario;
    insertarCuestionario($_POST["vivienda"], $_POST["niños"], $_POST["mascotas"], $_POST["experiencia"], $_POST["ayuda"], $_POST["licencia"], $_POST["actividad"], $_POST["adopcion"],
    $_POST["agree"]);
    header("location: ../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Cuestionario</title>
</head>
<body>
    <div class="contenedor-formulario"> 
        <form class="formulario-registro" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="cuestionario">
            <div class="row col-md-6 mb-4 form-outline">
                <label for="vivienda">Seleccione el tipo de vivienda en la que reside habitualmente:</label>
                <select id="vivienda" name="vivienda">
                    <option value="" selected>Seleccione el tipo</option>
                    <option value="pisoPeq">Piso hasta 70m</option>
                    <option value="pisoGran">Piso mayor de 70m</option>
                    <option value="casa">Casa</option>
                    <option value="parcela">Casa con parcela</option>
                </select>   
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="niños">¿Hay niños o posibilidad de que los haya en un futuro en su núcleo familiar?</label>
                <div>
                    <input type="radio" name="niños" id="niñosSi" value="niñosSi">
                    <label for="niñosSi">Sí</label>
                </div>
                <div>
                    <input type="radio" name="niños" id="niñosNo" value="niñosNo">
                    <label for="niñosNo">No</label>
                </div>
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="mascotas">Seleccione si tiene alguna o varias de las siguientes mascotas actualmente:</label>
                <div>
                    <input type="checkbox" name="mascotas" id="perro" value="perro">
                    <label for="perro">Perro/s</label>
                </div>
                <div>
                    <input type="checkbox" name="mascotas" id="gato" value="gato">
                    <label for="gato">Gato/s</label>
                </div>
                <div>
                    <input type="checkbox" name="mascotas" id="roedor" value="roedor">
                    <label for="roedor">Conejos/Roedores/Aves</label>
                </div>
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="experiencia">Seleccione si tiene experiencia previa en perros de algún tipo:</label>
                <div>
                    <input type="checkbox" name="experiencia" id="sano" value="sano">
                    <label for="sano">Perro sano</label>
                </div>
                <div>
                    <input type="checkbox" name="experiencia" id="enfermo" value="enfermo">
                    <label for="enfermo">Perro enfermo</label>
                </div>
                <div>
                    <input type="checkbox" name="experiencia" id="miedo" value="miedo">
                    <label for="miedo">Perro con miedos</label>
                </div>
                <div>
                    <input type="checkbox" name="experiencia" id="comportamiento" value="comportamiento">
                    <label for="comportamiento">Perro con problemas de comportamiento</label>
                </div>
                <div>
                    <input type="checkbox" name="experiencia" id="sinExp" value="sinExp">
                    <label for="sinExp">Sin experiencia previa</label>
                </div>
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="ayuda">¿Estaría dispuesto a contratar ayuda de un profesional en comportamiento animal si fuera necesario?</label>
                <div>
                    <input type="radio" name="ayuda" id="ayudaSi" value="ayudaSi">
                    <label for="ayudaSi">Sí</label>
                </div>
                <div>
                    <input type="radio" name="ayuda" id="ayudaNo" value="ayudaNo">
                    <label for="ayudaNo">No</label>
                </div>
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="licencia">¿Tiene o estaría dispuesto a tener licencia para perros catalogados como potencialmente peligrosos?</label>
                <div>
                    <input type="radio" name="licencia" id="licenciaSi" value="licenciaSi">
                    <label for="licenciaSi">Sí</label>
                </div>
                <div>
                    <input type="radio" name="licencia" id="licenciaNo" value="licenciaNo">
                    <label for="licenciaNo">No</label>
                </div>
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="actividad">¿Cómo definiría la actividad de su núcleo familiar en la que le acompañará su mascota?</label>
                <div>
                    <input type="radio" name="actividad" id="reducida" value="reducida">
                    <label for="reducida">Persona/s mayor/es o con movilidad reducida</label>
                </div>
                <div>
                    <input type="radio" name="actividad" id="tranquila" value="tranquila">
                    <label for="tranquila">Persona/s joven/es con actividad normal o baja</label>
                </div>
                <div>
                    <input type="radio" name="actividad" id="activa" value="activa">
                    <label for="activa">Persona/s activa/s con salidas al aire libre (parque, playa, montaña...) al menos una vez al mes</label>
                </div>
                <div>
                    <input type="radio" name="actividad" id="deportista" value="deportista">
                    <label for="deportista">Persona/s activa/s y/o deportista/s con salidas al aire libre (parque, playa, montaña...) al menos una vez a la semana</label>
                </div>
            </div>
            <div class="row col-md-12 mb-4 form-outline">
                <label for="adopcion">¿Por qué desea adoptar y no comprar un perro?</label>
                <div>
                    <textarea id="adopcion" name="adopcion" rows="10" cols="60"></textarea>
                </div>
            </div>
            <div class="col-md-12 mb-4 form-outline">
                <label for="agree">En caso de no poder atenderlo, debe avisar en primer lugar a la protectora. ¿Está de acuerdo?</label>
                <input type="checkbox" id="agree" name="agree" value="agree">
            </div>
            <div class="d-flex justify-content-center pt-3">
                <button type="submit" name="submit" id ="submit" value="registroDatos" class="btn fw-semibold btn-block mb-4">Guardar Datos</button>
            </div>
        </form>
    </div>
</body>
</html>
