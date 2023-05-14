<?php
session_start();
?>
<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'views/bloques/nav.php';
?>



<section>
    <div class="contenedorImangenPaginaBlog">
        <img src="./views/img/<?php echo $_GET['nombreImg']?>" alt="">
    </div>
</section>

<section class="contenedorPaginaBlog">
    <div class="contenedorTituloPaginaBlog">
        <h1><?php echo $_GET['h1'] ?></h1>
    </div>
    <p><?php echo $_GET['p1'] ?></p>
    <h2><?php echo $_GET['h2'] ?></h2>
    <p><?php echo $_GET['p2'] ?></p>
    <p><?php echo $_GET['p3'] ?></p>
    <p><?php echo $_GET['p4'] ?></p>
</section>

<!-- REQUIRIMIENTO FOOTER -->
<?php
require 'views/bloques/footer.php';
?>