<?php
session_start();
?>
<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'views/bloques/nav.php';
?>

<!-- REQUIRIMIENTO PHP PRINCIPAL -->
<?php
require 'php/blog.php';
?>

<section>
    <div class="contenedorImangenBlog">
        <img src="./views/img/perro-header-blog.png" alt="">
    </div>
</section>

<section>
    <div class="contenedorTituloUnete">
        <h1>Blog de Snapdog</h1>
    </div>
</section>

<section class="contenedorBlog">
    <div class="contenedorBlog__contenido">

        <!-- ENTRADA -->
        <?php foreach ($datos as $dato) { ?>
            <div class="contenedorBlog__flex">
                <div class="contenedorBlog__imagen">
                    <img src="views/img/<?php echo $dato['nombreImg'] ?>" alt="">
                </div>
                <div class="contenedorBlog__texto">
                    <div class="contenedorBlog__heading">
                        <h1><?php echo $dato['h1'] ?></h1>
                    </div>
                    <div class="contenedorBlog__parafo">
                        <p><?php echo substr($dato['p1'], 0, 200 ) . '...' ?></p>
                    </div>
                    <div class="contenedorBlog__leerMas">
                        <!-- ENVIAR INFORMACIÓN POR GET-->
                        <a href="../DAW/paginaBlog.php?h1=<?php echo $dato['h1']?>
                        &p1=<?php echo $dato['p1']?>
                        &h2=<?php echo $dato['h2']?>
                        &p2=<?php echo $dato['p2']?>
                        &p3=<?php echo $dato['p3']?>
                        &p4=<?php echo $dato['p4']?>
                        &nombreImg=<?php echo $dato['nombreImg']?>
                        "> Leer Más...</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- ENTRADA -->

    </div>
</section>

<!-- REQUIRIMIENTO FOOTER -->
<?php
require 'views/bloques/footer.php';
?>