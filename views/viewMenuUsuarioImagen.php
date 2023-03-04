<div class='dashboard-app'>
    <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <div class='card-header'>
                    <h1>Imagen Usuario <?php echo $_SESSION['nomUser'] ?></h1>
                </div>
                <div class='card-body'>
                    <form name="MiForm" id="MiForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                        <h4 class="text-center">Seleccione imagen a cargar</h4>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Archivos</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="imagen" name="imagen" multiple>
                            </div>
                            <button type="submit" name="submit" id="submit" value="datosImagen" class="btn btn-primary">Cargar Imagen</button>
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