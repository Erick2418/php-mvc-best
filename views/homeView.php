

<?php  
require_once "views/partials/header.php";
?>

    <!-- carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-itemss active" style="background-image: url(assets/images/banner/ban1.png);" >	
                <div class="container">
                    <div class="carousel-caption ">    
                        <img class="logo-slider" src="assets/images/imagenes/ult.png">
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-itemss" style="background-image: url(assets/images/banner/ut.jpg)">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>"Una chica sin uñas hermosas es como una noche sin estrellas"</h1>
                        <p>Hacemos que tus uñas sean de ensueño, somos especialistas en uñas artificiales y manicura combinada.</p>
                        <p><a class="btn btn-gina" href="SHALOM 2.html" role="button">VER TIENDA</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-itemss ">
                <video class="d-block w-100" src="assets/media/med1.mp4" autoplay muted loop></video>	
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Tu cabello es memoria, belleza, ancestralidad, identidad, fuerza y mucho amor.</h1>
                        <p>Con nuestros tratamientos ayudarán a tu cabello a crecer, a tener una hidratación, suavizar y bajar ondas y friz</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Icons Grid -->
    <section class="bg-light text-center">
        <div class="row m-0">
            <div class="col-lg-4 my-5">
                <img class="snake" src="assets/images/imagenes/una.svg" width="140" height="140" alt="uñas">
                <div class="d-flex flex-column">
                    <div class="container-fluid">
                        <h2 class="my-3">UÑAS</h2>
                    </div>
                    <div class="container-fluid">
                        <p>Manicure, Pedicure, Extenciones Naturales y ...</p>
                    </div>
<!--                    <div class="container-fluid">
                        <p class="mt-auto"><a class="btn btn-divina" href="uñas.html" role="button">Ver Detalles &raquo;</a></p>
                    </div>-->
                </div>
            </div>
            <div class="col-lg-4 my-5">
                <img class="snake" src="assets/images/imagenes/tinte.svg" width="140" height="140" alt="tinte">
                <div class="d-flex flex-column">
                    <div class="container-fluid">
                        <h2 class="my-3">TINTURADOS</h2>
                    </div>
                    <div class="container-fluid">
                        <p> Rayitos, Iluminaciones, Mechas, Highlights y ...</p>
                    </div>
<!--                    <div class="container-fluid">
                        <p class="mt-auto"><a class="btn btn-divina" href="pelo.html" role="button">Ver Detalles &raquo;</a></p>
                    </div>-->
                </div>
            </div>
            <div class="col-lg-4 my-5">
                <img class="snake" src="assets/images/imagenes/cortes.svg" width="140" height="140" alt="cortes">
                <div class="d-flex flex-column">
                    <div class="container-fluid">
                        <h2 class="my-3">CORTES</h2>
                    </div>
                    <div class="container-fluid">
                        <p>Cortes, Tratamientos Capilares, Peinados y ...</p>
                    </div>
<!--                    <div class="container-fluid">
                        <p class="mt-auto"><a class="btn btn-divina" href="pelo.html" role="button">Ver Detalles &raquo;</a></p>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <hr class="mx-3 my-0">
    <!-- Image Showcases -->
    <section class="bg-light align-middle">
        <div class="container-fluid p-3">
            <div class="row p-3">
                <div class="col-lg-4 order-lg-2 text-white text-center">
                    <img class="rounded snake img-fluid" src="assets/images/imagenes/pelo.png" width="250" alt="cortes">
                </div>
                <div class="col-lg-8 order-lg-1 my-auto px-5 text-right">
                    <h2>Adiós al cabello seco y deshidratado</h2>
                    <p class="lead mb-0">Nuestro tratamiento está formulado con proteínas de colageno y queratina. Fortaleciendo el cabello haciéndolo más resistente. Hidrata y devuelve la vitalidad, proporcionando elasticidad al cabello.</p>
                </div>
            </div>
            <hr class="mx-5">
            <div class="row p-3">
                <div class="col-lg-4 order-lg-1 text-white text-center">
                    <img class="rounded snake img-fluid" src="assets/images/imagenes/pel1.jpeg" width="250" alt="cortes">
                </div>
                <div class="col-lg-8 order-lg-2 my-auto px-5">
                    <h2>Cepillado y alisado</h2>
                    <p class="lead mb-0">Todo tipo de tratamiento capilar, realizado por profesionales</p>
                </div>
            </div>
            <hr class="mx-5">
            <div class="row p-3">
                <div class="col-lg-4 order-lg-2 text-white text-center">
                    <img class="rounded snake img-fluid" src="assets/images/imagenes/una.jpg" width="250" alt="cortes">
                </div>
                <div class="col-lg-8 order-lg-1 my-auto text-right" style="padding-left: 50px;">
                    <h2>Uñas esculpidas</h2>
                    <p class="lead mb-0">Esta tecnica te brinda múltiples beneficios entre esos mayor duración y más cuidado a tus uñas.</p>
                    <?php include 'views/activarnav.php';?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'views/partials/footer.php';?>