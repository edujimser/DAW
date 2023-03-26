<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./views/css/form.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>SnapDog</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-5">
                        <li class="nav-item">
                            <a class="nav-link " href="./index.php">
                                HO<img src="./views/img/logo.png" class="nav-logo-home" />ME
                            </a>
                        </li>
                        <!-- Left links -->

                        <li class="nav-item">
                            <a class="nav-link mt-2" href="#">Adoptantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2" href="#">¿Cómo funciona?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2" href="#">Conocenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2" href="#">Unete al proyecto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2" href="./php/blog.php">Blog</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item fw-bold iniciarSessionLogin">
                        <?php if (!isset($_SESSION['nomUser'])) : ?>
                            <a class="nav-link me-5 nav-logo-inicio " href="./php/login.php"> <img class="nav-logo-inicio-pata" src="./views/img/huella.png" />Iniciar Sessión</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item fw-bold iniciarSessionLogin">
                        <?php if (isset($_SESSION['nomUser'])) : ?>
                            <a class="nav-link me-5 nav-logo-inicio " href="./php/MenuUsuarioHome.php" target="_blank"> <img class="nav-logo-inicio-pata" src="./views/img/huella.png" /><?php echo $_SESSION['nomUser'] ?></a>
                        <?php endif; ?>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <!-- Right elements -->
                </div>
                <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>