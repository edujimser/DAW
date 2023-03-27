<?php
session_start();
?>
<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'views/bloques/nav.php';
?>

<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'php/adoptantes.php';
?>



<!-- Adoptantes -->
<section>
  <div class="container my-5">
    <header class="mb-4">
+
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 1]['idUser'])): ?>
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 2]['idUser'])): ?>
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 3]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 3]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 4]['idUser'])): ?>
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 5]['idUser'])): ?>
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 6]['idUser'])): ?>
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
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 7]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 7]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 8 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 8])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 8] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 8]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 8]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 8]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 8]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 8]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 8]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 8]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 8]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 8]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 7]['descripcionCompañero'] ?> <?php endif; ?> </p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 8]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 8]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 9 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 9])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 9] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 9]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 9]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 9]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 9]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 9]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 9]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 8]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 9]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 9]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 9]['descripcionCompañero'] ?> <?php endif; ?> </p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 9]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 9]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($datosUsuarios[$indiceArrayInicio + 10 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 10])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 10] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 10]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 10]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 10]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 10]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 10]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 10]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 10]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 10]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 10]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 10]['descripcionCompañero'] ?> <?php endif; ?> </p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 10]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 10]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if (isset($datosUsuarios[$indiceArrayInicio + 11 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 11])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 11] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 11]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 11]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 11]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 11]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 11]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 11]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 11]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 11]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 11]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 11]['descripcionCompañero'] ?> <?php endif; ?> </p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 11]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 11]['idUser'] ?>
                <?php endif; ?>
                <a href='http://127.0.0.1/DAW/tarjetaPersonal.php<?php if(isset($variableGetId)):?> <?php echo $variableGetId;?> <?php endif?>' class="btn btn-primary btn-block shadow-0 me-1">Conóceme</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if (isset($datosUsuarios[$indiceArrayInicio + 12 ])) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">

          <?php if(!empty($imagenes_codificadas[$indiceArrayInicio + 12])):?>
              <?php echo '<img src="data:image/jpeg;base64,' .$imagenes_codificadas[$indiceArrayInicio + 12] . '" alt="imagen" class="card-img-top" style="aspect-ratio: 1 / 1" >'; ?>
            <?php else: ?>
              <img src="http://127.0.0.1/DAW/views/img/user.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php if (isset($datosUsuarios[$indiceArrayInicio + 12]['nomUser'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 12]['nomUser'] ?> <?php endif; ?> </h5>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 12]['nombre'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 12]['nombre'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 12]['apellido1'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 12]['apellido1'] ?> <?php endif; ?> <?php if (isset($datosUsuarios[$indiceArrayInicio + 12]['apellido2'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 12]['apellido2'] ?> <?php endif; ?></p>
              <p class="card-text"><?php if (isset($datosUsuarios[$indiceArrayInicio + 12]['descripcionCompañero'])) : ?> <?php echo $datosUsuarios[$indiceArrayInicio + 12]['descripcionCompañero'] ?> <?php endif; ?> </p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto .mx-auto">
                <?php if(isset($datosUsuarios[$indiceArrayInicio + 12]['idUser'])): ?>
                  <?php $variableGetId = '?'. 'idUser=' .$datosUsuarios[$indiceArrayInicio + 12]['idUser'] ?>
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




<!-- REQUIRIMIENTO FOOTER -->
<?php
require 'views/bloques/footer.php';
?>