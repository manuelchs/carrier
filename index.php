<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/slider.js"></script>
    <script src="/assets/scripts/hammer.js"></script>
    <title>ATG - Auto Thermos de Guadalajara</title>
</head>
<body>
    <?php include('partial_views/navbar.php') ?>
    <div class="full-screen-wrapper home-hero dark-overlay">
        <video id="heroHome" width="100%" autoplay muted loop playsinline src=""></video>
        <div class="general-max-width">
            <h1 class="custom-animation custom-animation-left">Expertos en el transporte de productos grado alimenticio.</h1>
            <h4 class="custom-animation custom-animation-left">En ATG no sólo cuidamos tu producto, también cuidamos tu prestigio.</h4>
            <a href="contacto.php" class="main-button custom-animation custom-animation-left"><span>Contactar</span></a>
        </div>
        <button onclick="scrollToID('#quienes-somos');" class="down-button"><i class="far fa-chevron-double-down"></i></button>
    </div>

    <div id="quienes-somos" class="main-wrapper home-wrapper-quienes">
        <div class="general-max-width two-wrappers self-padding-mobile">
            <div class="half-wrapper">
                <div class="main-title-underline">
                    <h2 class="custom-animation custom-animation-left">Auto Thermos de Guadalajara</h2>
                    <h1 class="custom-animation custom-animation-left">Quiénes somos</h1>
                    <div class="divisor custom-animation custom-animation-left"></div>
                </div>
                <p class="custom-animation custom-animation-left text-box">Somos una de las mejores empresas mexicanas dedicadas al transporte de productos grado alimenticio, con los estándares de calidad más estrictos en el lavado y sanitizado de todas nuestras unidades.</p>
                <a href="quienes-somos.php" class="mt-2 main-button icon icon-right custom-animation custom-animation-left"><span>Conoce más</span><i class="fas fa-chevron-right"></i> </a>
            </div>
            <div class="half-wrapper four-grid">
                <div class="icon-text-wrapper">
                    <div class="icon-title">
                        <img class="custom-animation custom-animation-up" src="/assets/images/home/icono-seguridad.svg" alt="">
                        <h6 class="custom-animation custom-animation-top">Seguridad</h6>
                    </div>
                    <p class="custom-animation custom-animation-bottom text-box">Nuestros protocolos de seguridad protegen el producto y prestigio de nuestros clientes, así como a nuestros operadores.</p>
                </div>
                <div class="icon-text-wrapper">
                    <div class="icon-title">
                        <img class="custom-animation custom-animation-up" src="/assets/images/home/icono-inocuidad.svg" alt="">
                        <h6 class="custom-animation custom-animation-top">Inocuidad</h6>
                    </div>
                    <p class="custom-animation custom-animation-bottom text-box">Aseguramos que las unidades sean libres de agentes contaminantes.</p>
                </div>
                <div class="icon-text-wrapper">
                    <div class="icon-title">
                        <img class="custom-animation custom-animation-up" src="/assets/images/home/icono-entrega.svg" alt="">
                        <h6 class="custom-animation custom-animation-top">Entrega</h6>
                    </div>
                    <p class="custom-animation custom-animation-bottom text-box">La puntualidad de nuestro servicio es uno de nuestros principales compromisos.</p>
                </div>
                <div class="icon-text-wrapper">
                    <div class="icon-title">
                        <img class="custom-animation custom-animation-up" src="/assets/images/home/icono-calidad.svg" alt="">
                        <h6 class="custom-animation custom-animation-top">Calidad</h6>
                    </div>
                    <p class="custom-animation custom-animation-bottom text-box">Nuestro diferenciador es la calidad en la prestación del servicio, avalados por nuestro sello de garantía.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper home-wrapper-norte-sur dark-overlay">
        <div class="general-max-width two-wrappers">
            <div class="half-wrapper">
                <div class="main-title-underline">
                    <h2 class="font-white custom-animation custom-animation-top">Llegamos más lejos</h2>
                    <h1 class="font-white custom-animation custom-animation-top">De norte a sur y de este a oeste</h1>
                    <div class="divisor custom-animation custom-animation-bottom"></div>
                </div>
                <p class="font-white custom-animation custom-animation-bottom text-box">Seleccionamos y monitoreamos las mejores rutas a nivel nacional para que tu producto llegue seguro hasta su destino.</p>

                <div class="icons-number">
                    <div class="icon-number">
                        <img src="/assets/images/home/icono-tractocamiones.svg" alt="">
                        <span class="number custom-animation custom-animation-top counter-animation" counter="116" id="counter1">0</span>
                        <span class="text custom-animation custom-animation-bottom">Tractocamiones</span>
                    </div>
                    <div class="icon-number">
                        <img src="/assets/images/home/icono-rutas.svg" alt="">
                        <span class="number custom-animation custom-animation-top counter-animation" counter="300" id="counter2">0</span>
                        <span class="text custom-animation custom-animation-bottom" id="counter3">Rutas</span>
                    </div>
                    <div class="icon-number">
                        <img src="/assets/images/home/icono-semiremolques.svg" alt="">
                        <span class="number custom-animation custom-animation-top counter-animation" counter="144" id="counter3">0</span>
                        <span class="text custom-animation custom-animation-bottom">Semiremolques</span>
                    </div>
                </div>
            </div>
        </div>
        <img class="camion" src="/assets/images/home/camion-atg.png" alt="">
    </div>

    <div class="main-wrapper home-cobertura-wrapper">
        <div class="general-max-width two-wrappers">
            <div class="half-wrapper">
                <div class="main-title-underline">
                    <h2 class="custom-animation custom-animation-top">No tenemos límite</h2>
                    <h1 class="custom-animation custom-animation-top">Industrias a las que damos cobertura</h1>
                    <div class="divisor custom-animation custom-animation-bottom"></div>
                </div>
                <p class="font-bold custom-animation custom-animation-bottom text-box">Aportamos una visión que comprende la evolución de la industria, los retos del negocio y la tecnología adecuada.</p>
                <p class="mt-1-half custom-animation custom-animation-bottom text-box">Participamos en importantes industrias como la tequilera y oleaginosa, así como en grandes industrias que se dedican a la producción de maíz, fructuosa , jugos, endulzantes, destilados y lácteos.</p>
            </div>
            <div class="half-wrapper coberturas">
                <a href="industrias/oleaginosas.php" class="cobertura-wrapper oleaginosas custom-animation custom-animation-right">
                    <span class="yellow-line">Oleaginosas</span>
                    <i class="far fa-chevron-circle-right"></i>
                </a>
                <a href="industrias/jugos.php" class="cobertura-wrapper jugos custom-animation custom-animation-left">
                    <span class="green-line">Jugos</span>
                    <i class="far fa-chevron-circle-right"></i>
                </a>
                <a href="industrias/endulzantes.php" class="cobertura-wrapper endulzantes custom-animation custom-animation-right">
                    <span class="blue-line">Endulzantes</span>
                    <i class="far fa-chevron-circle-right"></i>
                </a>
                <a href="industrias/destilados.php" class="cobertura-wrapper destilados custom-animation custom-animation-left">
                    <span class="red-line">Destilados</span>
                    <i class="far fa-chevron-circle-right"></i>
                </a>
                <a href="industrias/lacteos.php" class="cobertura-wrapper lacteos custom-animation custom-animation-right">
                    <span>Lácteos</span>
                    <i class="far fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div id="prevHomeWrapper" class="video-wrapper custom-animation dark-overlay">
        <video id="prevHome" width="100%" autoplay muted loop playsinline src=""></video>
        <button onclick="openModal('modalVideo', true)">
            <i class="far fa-play-circle"></i>
        </button>
    </div>

    <div class="main-wrapper">
        <div class="general-max-width">
            <div class="main-title-underline centered-title">
                <h1 class="custom-animation custom-animation-top">Nuestras certificaciones</h1>
                <div class="divisor custom-animation custom-animation-bottom"></div>
            </div>
            <div class="certificaciones">
                <div class="certificacion custom-animation custom-animation-left">
                    <img src="/assets/images/home/iso-22000.svg" alt="">
                </div>
                <div class="certificacion custom-animation custom-animation-bottom">
                    <img src="/assets/images/home/iso-9001.svg" alt="">
                    <div class="badge">en proceso</div>
                </div>
                <div class="certificacion custom-animation custom-animation-right">
                    <img src="/assets/images/home/certificado-kosher.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper home-ventajas dark-overlay">
        <div class="general-max-width two-wrappers">
            <div class="half-wrapper custom-animation custom-animation-left">
                <img class="ipad" src="/assets/images/home/ipad.png" alt="">
            </div>
            <div class="half-wrapper">
                <div class="main-title-underline">
                    <h2 class="font-white custom-animation custom-animation-top">Ventajas tecnológicas</h2>
                    <h1 class="font-white custom-animation custom-animation-top">Siempre a la vanguardia</h1>
                    <div class="divisor custom-animation custom-animation-bottom"></div>
                </div>
                <div class="ventajas">
                    <div class="ventaja">
                        <div class="icon custom-animation custom-animation-left">
                            <img src="/assets/images/home/icono-cuentas-espejo.svg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="custom-animation custom-animation-top">Cuentas espejo</h6>
                            <p class="custom-animation custom-animation-bottom text-box">Nuestros clientes tienen acceso al monitoreo en tiempo real de las unidades que contienen sus cargas.</p>
                        </div>
                    </div>
                    <div class="ventaja">
                        <div class="icon custom-animation custom-animation-left">
                            <img src="/assets/images/home/icono-control-ruta.svg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="custom-animation custom-animation-top">Control de ruta</h6>
                            <p class="custom-animation custom-animation-bottom text-box">Ponemos a disposición del cliente las paradas autorizadas dentro de la ruta, zonas de riesgo y detalles de la ruta en general.</p>
                        </div>
                    </div>
                    <div class="ventaja">
                        <div class="icon custom-animation custom-animation-left">
                            <img src="/assets/images/home/icono-rastreo-satelital.svg" alt="">
                        </div>
                        <div class="text">
                            <h6 class="custom-animation custom-animation-top">Rastreo satelital</h6>
                            <p class="custom-animation custom-animation-bottom text-box">No sólo cuidamos de nuestras unidades, sino también del producto que contienen las mismas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="inocuidad" class="main-wrapper home-inocuidad-wrapper">
        <div class="general-max-width">
            <div class="main-title-underline centered-title">
                <h2 class="custom-animation custom-animation-top">Proceso de sanitización</h2>
                <h1 class="custom-animation custom-animation-bottom">Inocuidad en cada tanque</h1>
                <div class="divisor custom-animation custom-animation-bottom"></div>
            </div>
        </div>

        <div class="general-max-width two-wrappers">
            <div class="half-wrapper">
                <div class="inocuidad">
                    <div class="img-inocuidad custom-animation custom-animation-left">
                        <div class="icon-title">
                            <div class="img-wrapper">
                                <img src="/assets/images/home/icono-inocuidad-1.svg" alt="">
                            </div>
                            <span>Sanitizado de tanques</span>
                        </div>
                    </div>
                    <p class="custom-animation custom-animation-left text-box">Nuestro sistema de sanitizado evita la contaminación microbiológica para el transporte grado alimenticio, el manejo de estos productos requiere de un estricto control sanitario al ser destinados para el consumo humano. Se divide en fases cuyo resultado es similar al proceso de pasteurización, es un procedimiento térmico que debido a sus altas temperaturas los agentes bacterianos mueren.</p>
                </div>
            </div>
            <div class="half-wrapper">
                <div class="inocuidad second-wrapper">
                    <div class="img-inocuidad custom-animation custom-animation-right">
                        <div class="icon-title">
                            <div class="img-wrapper">
                                <img src="/assets/images/home/icono-inocuidad-2.svg" alt="">
                            </div>
                            <span>Secado de tanques</span>
                        </div>
                    </div>
                    <p class="custom-animation custom-animation-right text-box">Al transportar productos como el chocolate o el aceite debemos evitar el contacto con el agua para no alterar su estado, por lo que brindamos el servicio de secado asegurando la ausencia de humedad. Nuestro sistema de inyección de aire consta de 4 filtros HEPA y 4 prefiltros e incorporamos temperatura y ozono enriquecido para asegurar la inocuidad.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper home-personal-wrapper dark-overlay">
        <div class="general-max-width two-wrappers">
            <div class="half-wrapper">
                <div class="main-title-underline">
                    <h2 class="font-white custom-animation custom-animation-left">Programa de entrenamiento</h2>
                    <h1 class="font-white custom-animation custom-animation-left">Personal altamente capacitado</h1>
                    <div class="divisor custom-animation custom-animation-left"></div>
                </div>
                <p class="font-white custom-animation custom-animation-left text-box">Capacitamos a nuestros colaboradores como parte de nuestro programa de excelencia, con un plan que se conforma de 5 pilares principales.</p>
            </div>

            <div class="half-wrapper icons">
                <div class="icon custom-animation custom-animation-top">
                    <img src="/assets/images/home/icono-servicio-cliente.svg" alt="">
                    <span>Servicio al cliente</span>
                </div>
                <div class="icon custom-animation custom-animation-top">
                    <img src="/assets/images/home/icono-seguridad-industrial.svg" alt="">
                    <span>Seguridad industrial</span>
                </div>
                <div class="icon custom-animation custom-animation-top">
                    <img src="/assets/images/home/icono-responsabilidad.svg" alt="">
                    <span>Responsabilidad</span>
                </div>
                <div class="icon custom-animation custom-animation-bottom">
                    <img src="/assets/images/home/icono-practicas-de-manejo.svg" alt="">
                    <span>Buenas prácticas de manejo</span>
                </div>
                <div class="icon custom-animation custom-animation-bottom">
                    <img src="/assets/images/home/icono-conocimiento-tecnico.svg" alt="">
                    <span>Conocimiento técnico</span>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper home-clientes-wrapper">
        <div class="general-max-width two-wrappers">
            <div class="half-wrapper">
                <div class="main-title-underline">
                    <h2 class="custom-animation custom-animation-top">Nuestros clientes</h2>
                    <h1 class="custom-animation custom-animation-top">Al servicio de los mejores</h1>
                    <div class="divisor custom-animation custom-animation-bottom"></div>
                </div>
            </div>
            <div class="half-wrapper custom-animation custom-animation-right">
                <div class="slider-wrapper">
                    <div id="slider" class="slider column">
                        <div id="item1" class="slider-item s1">
                            <div class="item-inside">
                                <img src="/assets/images/home/oleofinos.png" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/almex.png" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/coca-cola.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/ingredion.svg" alt="">
                            </div>
                        </div>
                        <div id="item2" class="slider-item s2">
                            <div class="item-inside">
                                <img src="/assets/images/home/bimbo.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/unilever.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/purina.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/imasa.png" alt="">
                            </div>
                        </div>
                        <div id="item3" class="slider-item s3">
                            <div class="item-inside">
                                <img src="/assets/images/home/penafiel.png" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/lala.png" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/pepsico-logo.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/jumex.svg" alt="">
                            </div>
                        </div>
                        <div id="item4" class="slider-item s4">
                            <div class="item-inside">
                                <img src="/assets/images/home/brown–forman.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/sabritas.png" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/jose-cuervo.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/sello-rojo.svg" alt="">
                            </div>
                        </div>
                        <!-- <div id="item5" class="slider-item s5">
                            <div class="item-inside">
                                <img src="/assets/images/home/hershey.svg" alt="">
                            </div>
                            <div class="item-inside">
                                <img src="/assets/images/home/" alt="">
                            </div>
                        </div> -->
                    </div>
                    <div id="points" class="points">
                        <div id="point1" div="1" class="points-item p1 active"></div>
                        <div id="point2" div="2" class="points-item p2"></div>
                        <div id="point3" div="3" class="points-item p3"></div>
                        <div id="point4" div="4" class="points-item p4"></div>
                        <!-- <div id="point5" div="5" class="points-item p5"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper home-central-wrapper">
        <div class="general-max-width">
            <div class="main-title-underline centered-title">
                <h2 class="font-white custom-animation custom-animation-top">Próximamente</h2>
                <h1 class="font-white custom-animation custom-animation-top">Central Digital ATG</h1>
                <div class="divisor custom-animation custom-animation-bottom"></div>
            </div>
            <p class="font-white custom-animation custom-animation-bottom text-box">Acceso exclusivo para clientes, donde podrán monitorear sus cargas, rutas y servicios proporcionados.</p>
            <img class="custom-animation custom-animation-left" src="/assets/images/home/mano-gps.png" alt="">
        </div>
    </div>

    <?php include('partial_views/footer.php') ?>

    <div id="modalVideo" class="modal">
        <button class="close-modal"><i class="far fa-times"></i></button>
        <div class="modal-content">
            <div id="youtubeLoader">
            </div>
            <iframe id="youtubeIframe" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>