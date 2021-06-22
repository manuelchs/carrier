<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/sliders-equipo/velocidad.js"></script>
    <script src="/assets/scripts/sliders-equipo/camion.js"></script>
    <script src="/assets/scripts/sliders-equipo/trailer.js"></script>
    <title>Carrier Transicold - Refacciones</title>
</head>
<body>
    <?php $page = 'equipos'; ?>
    <?php include('partial_views/navbar.php') ?>

    <div class="hero">
        <div class="general-max-width">
            <div class="info">
                <h3>Unidades y equipos</h3>
                <h1>Sistemas de refrigeración <span>Carrier Transicold</span></h1>
                <p>Ofrecemos una línea completa de equipos de refrigeración para tráilers y camiones.</p>
            </div>

            <div class="img">
                <img src="/assets/db/images/hero-equipos.png" alt="">
            </div>
        </div>
    </div>

    <div class="main-wrapper shop">
        <div class="general-max-width">
            <div class="title-shop">
                <h1>Equipos</h1>
                <div class="route"><span>Productos</span><i class="fal fa-chevron-right"></i><span>Todos</span></div>
            </div>
        </div>

        <div class="equipos-slider-section">
            <div class="title">
                <h2>Velocidad Variable</h2>
                <a href="/equipos/velocidad-variable.php">Ver todo <i class="far fa-long-arrow-right"></i></a>
            </div>
            <div class="equipos-slider">
                <button class="slider-button right" id="arrowRightVelocidad"><i class="far fa-chevron-right"></i></button>
                <button class="slider-button left" id="arrowLeftVelocidad"><i class="far fa-chevron-left"></i></button>
                <div class="slider-wrapper">
                    <div id="velocidadSlider" class="slider column">
                        <div id="itemVelocidad1" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=0" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-280.png" alt="">
                                <h4>Citimax 280 Hot gas R 404 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=1" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-350.png" alt="">
                                <h4>Citimax 350 Hot gas R 404 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=3" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-400.png" alt="">
                                <h4>Citimax 400 Hot gas R 404a 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=5" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-500.png" alt="">
                                <h4>Citimax 500 R404A 12v LA</h4>
                            </a>
                        </div>
                        <div id="itemVelocidad2" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=7" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-700.png" alt="">
                                <h4>Citimax 700 R404A 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=9" class="equipo-wrapper">
                                <img src="/assets/db/images/citifresh-500.png" alt="">
                                <h4>Citifresh 500 R134a 12v 0°C</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=10" class="equipo-wrapper">
                                <img src="/assets/db/images/zephyr-30s.png" alt="">
                                <h4>Zephyr 30SE Trifásico 230v/3 fases</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=11" class="equipo-wrapper">
                                <img src="/assets/db/images/xarios-350.png" alt="">
                                <h4>Xarios 350e stand by 12v 220V</h4>
                            </a>
                        </div>
                        <div id="itemVelocidad3" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=0" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-280.png" alt="">
                                <h4>Citimax 280 Hot gas R 404 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=1" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-350.png" alt="">
                                <h4>Citimax 350 Hot gas R 404 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=3" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-400.png" alt="">
                                <h4>Citimax 400 Hot gas R 404a 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=5" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-500.png" alt="">
                                <h4>Citimax 500 R404A 12v LA</h4>
                            </a>
                        </div>
                        <div id="itemVelocidad4" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=7" class="equipo-wrapper">
                                <img src="/assets/db/images/citimax-700.png" alt="">
                                <h4>Citimax 700 R404A 12v LA</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=9" class="equipo-wrapper">
                                <img src="/assets/db/images/citifresh-500.png" alt="">
                                <h4>Citifresh 500 R134a 12v 0°C</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=10" class="equipo-wrapper">
                                <img src="/assets/db/images/zephyr-30s.png" alt="">
                                <h4>Zephyr 30SE Trifásico 230v/3 fases</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=11" class="equipo-wrapper">
                                <img src="/assets/db/images/xarios-350.png" alt="">
                                <h4>Xarios 350e stand by 12v 220V</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="equipos-slider-section">
            <div class="title">
                <h2>Camión</h2>
                <a href="/equipos/camion.php">Ver todo <i class="far fa-long-arrow-right"></i></a>
            </div>
            <div class="equipos-slider">
                <button class="slider-button right" id="arrowRightCamion"><i class="far fa-chevron-right"></i></button>
                <button class="slider-button left" id="arrowLeftCamion"><i class="far fa-chevron-left"></i></button>
                <div class="slider-wrapper">
                    <div id="camionSlider" class="slider column">
                        <div id="itemCamion1" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=17" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-550.png" alt="">
                                <h4>Supra 550 con stand by 220V</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=18" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-s6.png" alt="">
                                <h4>Supra S6 solo ruta</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=20" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-s7.png" alt="">
                                <h4>Supra S7 solo ruta</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=22" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-750.png" alt="">
                                <h4>Supra 750 con stand by 220V</h4>
                            </a>
                        </div>
                        <div id="itemCamion2" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=23" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-s8.png" alt="">
                                <h4>Supra S8 solo ruta</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=25" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-1050.png" alt="">
                                <h4>Supra 1050 con stand by 220 v</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=26" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-1150.png" alt="">
                                <h4>Supra 1150 con stand by 220 v</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=29" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-1250.png" alt="">
                                <h4>Supra 1250 con stand by 220 v</h4>
                            </a>
                        </div>
                        <div id="itemCamion3" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=17" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-550.png" alt="">
                                <h4>Supra 550 con stand by 220V</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=18" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-s6.png" alt="">
                                <h4>Supra S6 solo ruta</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=20" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-s7.png" alt="">
                                <h4>Supra S7 solo ruta</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=22" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-750.png" alt="">
                                <h4>Supra 750 con stand by 220V</h4>
                            </a>
                        </div>
                        <div id="itemCamion4" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=23" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-s8.png" alt="">
                                <h4>Supra S8 solo ruta</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=25" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-1050.png" alt="">
                                <h4>Supra 1050 con stand by 220 v</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=26" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-1150.png" alt="">
                                <h4>Supra 1150 con stand by 220 v</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=29" class="equipo-wrapper">
                                <img src="/assets/db/images/supra-1250.png" alt="">
                                <h4>Supra 1250 con stand by 220 v</h4>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="equipos-slider-section">
            <div class="title">
                <h2>Trailer</h2>
                <a href="/equipos/trailer.php">Ver todo <i class="far fa-long-arrow-right"></i></a>
            </div>
            <div class="equipos-slider">
                <button class="slider-button right" id="arrowRightTrailer"><i class="far fa-chevron-right"></i></button>
                <button class="slider-button left" id="arrowLeftTrailer"><i class="far fa-chevron-left"></i></button>
                <div class="slider-wrapper">
                    <div id="trailerSlider" class="slider column">
                        <div id="itemTrailer1" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=34" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-1350.png" alt="">
                                <h4>Vector 1350 sólo diesel</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=35" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-8500.png" alt="">
                                <h4>Vector 8500 Std Specs parrilla cromada</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=36" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-8500.png" alt="">
                                <h4>Vector 8500 eSolutions parrilla cromada</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=37" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-8100.png" alt="">
                                <h4>Vector 8100 aplicación estacionaria 440V</h4>
                            </a>
                        </div>
                        <div id="itemTrailer2" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=30" class="equipo-wrapper">
                                <img src="/assets/db/images/x7300.png" alt="">
                                <h4>X7300 - DT specs parrilla negra</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=31" class="equipo-wrapper">
                                <img src="/assets/db/images/x7300.png" alt="">
                                <h4>X7300 - eSolutions parrilla negra</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=32" class="equipo-wrapper">
                                <img src="/assets/db/images/x7500.png" alt="">
                                <h4>X7500 - W/Cromo & Datatrak</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=33" class="equipo-wrapper">
                                <img src="/assets/db/images/x7500.png" alt="">
                                <h4>X7500- eSolutions parrilla negra</h4>
                            </a>
                        </div>
                        <div id="itemTrailer3" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=34" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-1350.png" alt="">
                                <h4>Vector 1350 sólo diesel</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=35" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-8500.png" alt="">
                                <h4>Vector 8500 Std Specs parrilla cromada</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=36" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-8500.png" alt="">
                                <h4>Vector 8500 eSolutions parrilla cromada</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=37" class="equipo-wrapper">
                                <img src="/assets/db/images/vector-8100.png" alt="">
                                <h4>Vector 8100 aplicación estacionaria 440V</h4>
                            </a>
                        </div>
                        <div id="itemTrailer4" class="slider-item grid-equipos">
                            <a href="/equipos/detalle.php?idProducto=30" class="equipo-wrapper">
                                <img src="/assets/db/images/x7300.png" alt="">
                                <h4>X7300 - DT specs parrilla negra</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=31" class="equipo-wrapper">
                                <img src="/assets/db/images/x7300.png" alt="">
                                <h4>X7300 - eSolutions parrilla negra</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=32" class="equipo-wrapper">
                                <img src="/assets/db/images/x7500.png" alt="">
                                <h4>X7500 - W/Cromo & Datatrak</h4>
                            </a>

                            <a href="/equipos/detalle.php?idProducto=33" class="equipo-wrapper">
                                <img src="/assets/db/images/x7500.png" alt="">
                                <h4>X7500- eSolutions parrilla negra</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper big-wrapper servicio-integral-wrapper">
        <div class="general-max-width">
            <div class="title-centered">
                <h3>¿No encuentras lo que buscas?</h3>
                <h2>Tenemos el equipo que necesitas</h2>
                <p class="text-centered">Contamos con la gama completa en equipos de refrigeración para transportes</p>
                <button class="mt-2 main-button green-button"><span>Contactar</span></button>
            </div>
        </div>
    </div>
    <?php include('partial_views/footer.php') ?>
</body>
</html>