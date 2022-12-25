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
                <a href="http://127.0.0.1/DAW/php/MenuUsuarioHome.php" class='dashboard-nav-item <?php if(isset($posicion)): if($posicion == 'Home'): echo ' active';; ?><?php endif; ?> <?php endif; ?>'>
                    <i class="fas fa-tachometer-alt">
                    </i> SnapDog 
                </a>
            
                <a href="http://127.0.0.1/DAW/php/MenuUsuarioDatosRegistro.php" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Datos Registros </a>

                <a href="http://127.0.0.1/DAW/php/MenuUsuarioDatosRegistro.php" class="dashboard-nav-item"><i class="fas fa-file-upload"></i>Datos Personales</a>

                <a href="http://127.0.0.1/DAW/php/MenuUsuarioDatosRegistro.php" class="dashboard-nav-item"><i class="fas fa-file-upload"></i>Test</a>
                
                <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-photo-video"></i> Media </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item">Images</a><a href="#" class="dashboard-nav-dropdown-item">Video</a></div>
                </div>
                
                <div class="nav-item-divider"></div>

                <a href="http://127.0.0.1/DAW/startSessionCookies/cerrarCookieSession.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sessión </a>
            </nav>
        </div>