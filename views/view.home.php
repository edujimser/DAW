<?php
session_start();
?>
<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'views/bloques/nav.php';
?>

<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'php/home.php';
?>

<section>
  <!-- INTRO -->
  <div class="bannerTopHome text-white mt-5">
    <div class="container py-4">
      <h1>
        Forma Parte de la familia de <br />
        SnapDog
      </h1>
      <p>
        Ayudamos a personas a encontrar su mascota
      </p>
      <button type="button " class="btn btn-outline-light border">
        <span class="pt-1">Registrate</span>
      </button>
    </div>
    <div class="container">
      <img src="http://127.0.0.1/DAW/views/img/perroHome.png" alt="">
    </div>
  </div>
  <!-- INTRO -->
</section>

<!-- Adoptantes -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>Adoptantes</h3>
    </header>

    <div class="row">
      <?php if (isset($datosUsuarios[$indiceArrayInicio])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
           
            <?php if(!empty($imagenes_codificadas[$indiceArrayInicio])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 1])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 1])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 1] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 1]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 1]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 1]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 1]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 1]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 1]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 1]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 1]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 1]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 1]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 1]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 2])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 2])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 2] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 2]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 2]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 2]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 2]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 2]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 2]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 2]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 2]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 2]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 2]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 2]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 3])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 3])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 3] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 3]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 3]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 3]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 3]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 3]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 3]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 3]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 3]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 3]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 3]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 3]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="row">
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 4])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 4])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 4] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 4]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 4]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 4]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 4]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 4]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 4]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 4]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 4]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 4]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 4]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 4]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 5])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 5])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 5] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 5]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 5]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 5]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 5]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 5]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 5]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 5]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 5]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 5]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 5]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 5]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 6 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 6])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 6] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 6]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 6]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 6]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 6]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 6]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 6]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 6]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 6]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 6]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 6]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 6]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 7 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 7])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 7] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 7]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 7]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 7]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 7]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 7]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 7]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 7]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 7]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 7]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 7]['descripcionCompañero'] ?> <?php endif; ?> </p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 7]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Paginacion -->
    <div class="paginacion">
      <div class="paginacion-derecha">
        <?php if ($pagina_actual < $num_paginas) : ?>
          <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha">Pagina Siguiente      <i class="glyphicon glyphicon-arrow-right"></i></a>
        <?php endif; ?>
      </div>
      <div class="paginacion-izquierda">
        <?php if ($pagina_actual > 1 && $pagina_actual <= $num_paginas) : ?>
          <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"><i class="glyphicon glyphicon-arrow-left"></i>      Pagina Anterior</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Adoptantes -->

<!-- Blog -->
<section class="mt-5 mb-4">
  <div class="container text-dark">
    <header class="mb-4">
      <h3>Blog</h3>
    </header>
    <div class="paginacion">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/1.webp" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                23.12.2022
              </span>
              <a href="#">
                <h6 class="text-dark">How to promote brands</h6>
              </a>
              <p>When you enter into any new area of science, you almost reach</p>
            </div>
          </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/2.webp" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                13.12.2022
              </span>
              <a href="#">
                <h6 class="text-dark">How we handle shipping</h6>
              </a>
              <p>When you enter into any new area of science, you almost reach</p>
            </div>
          </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/3.webp" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                25.11.2022
              </span>
              <a href="#">
                <h6 class="text-dark">How to promote brands</h6>
              </a>
              <p>When you enter into any new area of science, you almost reach</p>
            </div>
          </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/4.webp" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                03.09.2022
              </span>
              <a href="#">
                <h6 class="text-dark">Success story of sellers</h6>
              </a>
              <p>When you enter into any new area of science, you almost reach</p>
            </div>
          </article>
        </div>
      </div>

      <!--PAGINACION -->

    </div>

  </div>
</section>
<!-- Blog -->


<!-- REQUIRIMIENTO FOOTER -->
<?php
require 'views/bloques/footer.php';
?>