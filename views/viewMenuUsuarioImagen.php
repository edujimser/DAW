<div class='dashboard-app'>
    <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <div class='card-header'>
                    <h1>Imagen Usuario <span><?php echo $_SESSION['nomUser'] ?><span></h1>
                </div>
                <div class='card-body'>
                    <form class="formularioDatosPersonales" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formularioDatosImagen" id="formularioDatosImagen" enctype="multipart/form-data">
                        <div>
                            <div class="card-body p-md-5 text-black">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="file" id="nombre" name="foto" class="form-control form-control-lg" />
                                        </div>
                                        <div class="d-flex justify-content-center pt-3">
                                                <button type="submit" name="submit" id="submit" value="datosImagen" class="btn fw-semibold btn-block mb-4"> Subir Fotografía </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                             <?php echo '<img src="data:image/jpeg;base64,' . $imagen_codificada . '" alt="imagen">' ?>
                                        </div>
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