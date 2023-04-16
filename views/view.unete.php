<?php
session_start();
?>
<!-- REQUIRIMIENTO NAVEGADOR -->
<?php
require 'views/bloques/nav.php';
?>

<!-- REQUIRIMIENTO PHP PRINCIPAL -->
<?php
require 'php/comoFunciona.php';
?>

<section>
    <div class="contenedorImangenUnete">
        <img src="./views/img/fondoPerroTransparente3.png" alt="">
    </div>
</section>

<section>
    <div class="contenedorTituloUnete">
        <h1>Unete a nuestro equipo</h1>
    </div>
</section>


<section>

    <div class="contednedorTarjetasUnete">
        
        <div class="cotnenedorUnete">
            <div class="contenedorTarjetaImagenUnete">
                <img src="./views/img/camara.png" alt="">
            </div>
            <div class="contenedorTarjetaTextoUnete">
                <h3>Buscamos a fotógrafos </h3>
                <p>Unimos talento fotográfico. Únete a nuestro equipo y captura momentos únicos con tus imágenes impresionante</p>
                <div class="contenedorTarjetaBotonUnete">
                    <button class="btn fw-semibold btn-block mb-4"><a href="mailto:ejemplo@correo.com">Envianos tu curriculum</a></button>
                </div>
            </div>
        </div>

        <div class="cotnenedorUnete">
            <div class="contenedorTarjetaImagenUnete">
                <img src="./views/img/desarrolloWeb.png" alt="">
            </div>
            <div class="contenedorTarjetaTextoUnete">
                <h3>Buscamos a desarrolladores </h3>
                <p>¿Eres un desarrollador apasionado? Únete a nuestro equipo para crear soluciones innovadoras y llevar tu carrera al siguiente nivel</p>
                <div class="contenedorTarjetaBotonUnete">
                    <button class="btn fw-semibold btn-block mb-4"><a href="mailto:ejemplo@correo.com">Envianos tu curriculum</a></button>
                </div>
            </div>
        </div>

        <div class="cotnenedorUnete">
            <div class="contenedorTarjetaImagenUnete">
                <img src="./views/img/diseño.png" alt="">
            </div>
            <div class="contenedorTarjetaTextoUnete">
                <h3>Buscamos a diseñadores </h3>
                <p>Buscamos un diseñador creativo y comprometido para unirse a nuestro equipo. Ayúdanos a construir marcas excepcionales y a dar vida a ideas emocionantes</p>
                <div class="contenedorTarjetaBotonUnete">
                    <button class="btn fw-semibold btn-block mb-4"><a href="mailto:ejemplo@correo.com">Envianos tu curriculum</a></button>
                </div>
            </div>
        </div>

        <div class="cotnenedorUnete">
            <div class="contenedorTarjetaImagenUnete">
                <img src="./views/img/editorVideo.png" alt="">
            </div>
            <div class="contenedorTarjetaTextoUnete">
                <h3>Buscamos a editores de video </h3>
                <p>Buscamos talento en edición de video. Únete a nuestro equipo para crear contenido impactante y contar historias únicas a través de la pantalla</p>
                <div class="contenedorTarjetaBotonUnete">
                    <button class="btn fw-semibold btn-block mb-4"><a href="mailto:ejemplo@correo.com">Envianos tu curriculum</a></button>
                </div>
            </div>
        </div>

        <div class="cotnenedorUnete">
            <div class="contenedorTarjetaImagenUnete">
                <img src="./views/img/mercado.png" alt="">
            </div>
            <div class="contenedorTarjetaTextoUnete">
                <h3>Buscamos a marketitianos </h3>
                <p>Buscamos talento en edición dentro del sector del marketing. Únete a nuestro equipo para crear un proyecto impactante e imponente</p>
                <div class="contenedorTarjetaBotonUnete">
                    <button class="btn fw-semibold btn-block mb-4"><a href="mailto:ejemplo@correo.com">Envianos tu curriculum</a></button>
                </div>
            </div>
        </div>

    </div>

</section>



<!-- REQUIRIMIENTO FOOTER -->
<?php
require 'views/bloques/footer.php';
?>