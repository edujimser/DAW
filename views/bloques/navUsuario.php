<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://127.0.0.1/DAW/views/css/menuUsuario.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- https://freefrontend.com/bootstrap-menus/ -->
    <!-- http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js -->
    <div class='dashboard'>
        <div class="dashboard-nav">
            <!-- LOGO MENU -->
            <header>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i class="fas fa-anchor"></i><img class="imagenMenuLogo" src="http://127.0.0.1/DAW/views/img/logo.png"/></a>
            </header>

                <!-- MENU -->
                    <!-- ACTIVACION COLOR BOTON MENU -->
                    <?php $url = $_SERVER["REQUEST_URI"];?>
                         <!-- POSICION HOME -->
                        <?php if ($url == '/DAW/php/MenuUsuarioHome.php'): $homeActive = 'active'; ?>
                        <?php elseif($url !== '/DAW/php/MenuUsuarioHome.php'):  $homeActive = 'Noactive';?>
                        <?php endif; ?>
                         <!-- POSICION DATOS REGISTRO -->
                        <?php if ($url == '/DAW/php/MenuUsuarioDatosRegistro.php'): $DatosRegistroActive = 'active'; ?>
                        <?php elseif($url !== '/DAW/php/MenuUsuarioDatosRegistro.php'):  $DatosRegistroActive = 'Noactive';?>
                        <?php endif; ?>
                        <!-- POSICION DATOS PERSOANLES -->
                        <?php if ($url == '/DAW/php/MenuUsuarioDatosPersonales.php'): $DatosPersonalesActive = 'active'; ?>
                        <?php elseif($url !== '/DAW/php/MenuUsuarioDatosPersonales.php'):  $DatosPersonalesActive = 'Noactive';?>
                        <?php endif; ?>
                        <!-- POSICION TEST PERRUNO -->
                        <?php if ($url == '/DAW/php/MenuUsuarioTest.php'): $DatosTestActive = 'active'; ?>
                        <?php elseif($url !== '/DAW/php/MenuUsuarioTest.php'):  $DatosTestActive = 'Noactive';?>
                        <?php endif; ?>
                        <!-- POSICION IMAGEN -->
                        <?php if ($url == '/DAW/php/MenuUsuarioImagen.php'): $DatosImagenActive = 'active'; ?>
                        <?php elseif($url !== '/DAW/php/MenuUsuarioImagen.php'):  $DatosImagenActive = 'Noactive';?>
                        <?php endif; ?>


                <a href="http://127.0.0.1/DAW/php/MenuUsuarioHome.php" class='dashboard-nav-item <?php if(isset($homeActive)): echo $homeActive ?> <?php endif; ?>'>
                    <i class="fas fa-tachometer-alt">
                    </i> SnapDog 
                </a>
            
                <a href="http://127.0.0.1/DAW/php/MenuUsuarioDatosRegistro.php" class="dashboard-nav-item <?php if(isset($DatosRegistroActive)): echo $DatosRegistroActive ?> <?php endif; ?>">
                    <i class="fas fa-file-upload">
                    </i> Datos Registros 
                </a>

                <a href="http://127.0.0.1/DAW/php/MenuUsuarioDatosPersonales.php" class="dashboard-nav-item <?php if(isset($DatosPersonalesActive)): echo $DatosPersonalesActive ?> <?php endif; ?>">
                    <i class="fas fa-file-upload">   
                    </i>Datos Personales
                </a>

                <a href="http://127.0.0.1/DAW/php/MenuUsuarioTest.php" class="dashboard-nav-item <?php if(isset($DatosTestActive)): echo $DatosTestActive ?> <?php endif; ?>">
                    <i class="fas fa-file-upload">   
                    </i>Test Perruno
                </a>

                <a href="http://127.0.0.1/DAW/php/MenuUsuarioImagen.php" class="dashboard-nav-item <?php if(isset($DatosImagenActive)): echo $DatosImagenActive ?> <?php endif; ?>">
                    <i class="fas fa-file-upload">   
                    </i>Imagen Usuario
                </a>
                
                <!-- MENU -->

                <div class='dashboard-nav-dropdown'>
                    <div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item">Images</a><a href="#" class="dashboard-nav-dropdown-item">Video</a></div>
                </div>
                
                <div class="nav-item-divider"></div>

                <a href="http://127.0.0.1/DAW/startSessionCookies/cerrarCookieSession.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sessión </a>
            </nav>
        </div>