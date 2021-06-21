<?php
    $producto = null;
    $idProducto = $_GET["idProducto"];
    $stringJSON = file_get_contents("../assets/db/productos.json");
    $db = json_decode($stringJSON, true);

    foreach ($db['carrierProductos'] as $product) {
        if ( $product['id'] == $idProducto ) {
            $producto = $product;
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../partial_views/head_tag.php') ?>
    <title><?php echo $producto['nombre'] ?> - Carrier Transicold</title>
    <script src="/assets/scripts/sliders-equipo/tabs.js"></script>
    <meta property=”og:title” content="<?php echo $producto['nombre'] ?> - Carrier Transicold" />
    <meta property=”og:description” content="<?php echo $producto['resumen'] ?>"/>
    <meta property=”og:image” content="<?php echo '/assets/db/images/'.$producto['imagen_url']; ?>" />
</head>
<body>
    <?php $page = 'equipos'; ?>
    <?php include('../partial_views/navbar.php') ?>

    <div class="main-wrapper detail-route">
        <div class="general-max-width">
            <div class="route">
                <a href="/equipos.php">Productos</a>
                <i class="fal fa-chevron-right"></i>
                <a href="/equipos/velocidad-variable.php"><?php echo $producto['categoria']  ?></a>
                <i class="fal fa-chevron-right"></i>
                <span><?php echo $producto['nombre']  ?></span>
            </div>
        </div>
    </div>

    <div class="detail-wrapper">
        <div class="general-max-width">
            <div class="detail-container">
                <div class="main-data">
                    <img src="<?php echo '/assets/db/images/'.$producto['imagen_url'];  ?>" alt="">
                    <div class="description">
                        <h1><?php echo $producto['nombre']  ?></h1>
                        <img src="<?php echo '/assets/db/images/'.$producto['imagen_url'];  ?>" alt="">
                        <p><?php echo $producto['resumen']  ?></p>
                        <div class="buttons-wrapper">
                            <a class="main-button blue-button ghost-button"><span>Llamar</span></a>
                            <a target="_blank" href="<?php echo 'https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20quisiera%20cotizar%20'.$producto['nombre'] ?>" class="main-button green-button icon icon-left"><i class="fab fa-whatsapp"></i><span>Solicitar cotización</span></a>
                        </div>
                    </div>
                </div>

                <div class="tabs-data">
                    <div class="tabs">
                        <button tab="desc" class="tab active">Descripción</button>
                        <button tab="specs" class="tab">Especificaciones</button>
                        <button tab="docs" class="tab">Documentación</button>
                    </div>
                    <div class="info">
                        <div class="tab-info" id="desc">
                            <?php
                                $index = 1;
                                foreach ($producto['descripcion'] as $descripcion) {
                                    $desc = '<span class="text-bold">'.$descripcion['titulo'].'</span>'.' <span>'.$descripcion['descripcion'].'</span>';
                                    if ( $index < count($producto['descripcion']) ) {
                                        $desc = $desc.'<br><br>';
                                    }
                                    echo $desc;
                                    $index++;
                                }
                            ?>
                        </div>
                        <div class="tab-info" id="specs">
                            <?php
                                $index = 1;
                                $spec = '';
                                foreach ($producto['especificaciones'] as $especificacion) {
                                    $spec = '<span class="text-bold">'.$especificacion['titulo'].'</span><br>'.' <span>'.$especificacion['descripcion'].'</span>';
                                    if ( $index < count($producto['especificaciones']) ) {
                                        $spec = $spec.'<br><br>';
                                    }
                                    echo $spec;
                                    $index++;
                                }
                            ?>
                        </div>
                        <div class="tab-info" id="docs">
                            <?php
                                $docs = '';
                                foreach ($producto['documentos'] as $documento) {
                                    $docs = '<a target="_blank" href="/assets/db/docs/'.$documento['url'].'" class="doc"><span><i class="fas fa-file-download"></i> '.$documento['nombre'].'</span> <span>Descargar<i class="far fa-long-arrow-right"></i></span></a>';
                                    echo $docs;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper">
        <div class="general-max-width">
            <div class="title-centered">
                <h3>Otros productos</h3>
                <h2>También te puede interesar</h2>
                <div class="refacciones-grid mt-2">
                    <a class="refaccion equipo-item">
                        <img src="/assets/images/refacciones/refas/aceite-sintetico-poe.png" alt="">
                        <h2>aceite sintetico poe</h2>
                    </a>
                    <a class="refaccion equipo-item">
                        <img src="/assets/images/refacciones/refas/aceite-sintetico-poe.png" alt="">
                        <h2>aceite sintetico poe</h2>
                    </a>
                    <a class="refaccion equipo-item">
                        <img src="/assets/images/refacciones/refas/aceite-sintetico-poe.png" alt="">
                        <h2>aceite sintetico poe</h2>
                    </a>
                    <a class="refaccion equipo-item">
                        <img src="/assets/images/refacciones/refas/aceite-sintetico-poe.png" alt="">
                        <h2>aceite sintetico poe</h2>
                    </a>
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
    <?php include('../partial_views/footer.php') ?>
</body>
</html>