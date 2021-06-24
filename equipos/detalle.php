<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../partial_views/head_tag.php') ?>
    <?php
        $productoHEREHERE = null;
        $producto = $_GET["producto"];
        $otherProducts = [];
        $otherProductsToShow = [];

        foreach ($db['carrierProductos'] as $product) {
            if ( $product['url_id'] == $producto ) {
                $productoHERE = $product;
                break;
            }
        }
        
        foreach ($db['carrierProductos'] as $product) {
            if ( $product['categoria'] == $productoHERE['categoria'] && $product['url_id'] != $producto ) {
                array_push($otherProducts, $product);
            }
        }

        for ( $x = 0; $x < 4; $x++ ) {
            $indexProduct = rand(0, count($otherProducts) - 1);
            array_push($otherProductsToShow, $otherProducts[$indexProduct]);
        }
    ?>
    <title><?php echo $productoHERE['nombre'] ?> - Carrier Guadalajara</title>
    <script src="/assets/scripts/sliders-equipo/tabs.js"></script>
    <meta property=”og:title” content="<?php echo $productoHERE['nombre'] ?> - Carrier Transicold" />
    <meta property=”og:description” content="<?php echo $productoHERE['resumen'] ?>"/>
    <meta property=”og:image” content="<?php echo '/assets/db/images/'.$productoHERE['imagen_url']; ?>" />
</head>
<body>
    <?php $page = 'equipos'; ?>
    <?php include('../partial_views/navbar.php') ?>
    <div class="main-wrapper detail-route">
        <div class="general-max-width">
            <div class="route">
                <a href="/equipos.php">Productos</a>
                <i class="fal fa-chevron-right"></i>
                <?php
                    if ( $productoHERE['categoria'] == 'Velocidad variable' ) {
                        echo '<a href="/equipos/velocidad-variable.php">'.$productoHERE['categoria'].'</a>';
                    } else if ( $productoHERE['categoria'] == 'Camión' ) {
                        echo '<a href="/equipos/camion.php">'.$productoHERE['categoria'].'</a>';
                    } else {
                        echo '<a href="/equipos/trailer.php">'.$productoHERE['categoria'].'</a>';
                    }
                ?>
                <i class="fal fa-chevron-right"></i>
                <span><?php echo $productoHERE['nombre']  ?></span>
            </div>
        </div>
    </div>

    <div class="detail-wrapper">
        <div class="general-max-width">
            <div class="detail-container">
                <div class="main-data">
                    <img class="custom-animation custom-animation-bottom" src="<?php echo '/assets/db/images/'.$productoHERE['imagen_url'];  ?>" alt="">
                    <div class="description">
                        <h1 class="custom-animation custom-animation-bottom"><?php echo $productoHERE['nombre']  ?></h1>
                        <img class="custom-animation custom-animation-bottom" src="<?php echo '/assets/db/images/'.$productoHERE['imagen_url'];  ?>" alt="">
                        <p class="custom-animation custom-animation-top"><?php echo $productoHERE['resumen']  ?></p>
                        <div class="buttons-wrapper custom-animation custom-animation-top">
                            <a href="tel:+553338492695" class="main-button blue-button ghost-button"><span>Llamar</span></a>
                            <a target="_blank" href="<?php echo 'https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20quisiera%20cotizar%20'.$productoHERE['nombre'] ?>%20%E2%9D%84%EF%B8%8F" class="main-button green-button icon icon-left"><i class="fab fa-whatsapp"></i><span>Solicitar cotización</span></a>
                        </div>
                    </div>
                </div>

                <div class="tabs-data">
                    <div class="tabs">
                        <button tab="desc" class="tab active custom-animation custom-animation-bottom">Descripción</button>
                        <button tab="specs" class="tab custom-animation custom-animation-bottom">Especificaciones</button>
                        <button tab="docs" class="tab custom-animation custom-animation-bottom">Documentación</button>
                    </div>
                    <div class="info">
                        <div class="tab-info" id="desc">
                            <?php
                                $index = 1;
                                foreach ($productoHERE['descripcion'] as $descripcion) {
                                    $desc = '<span class="text-bold">'.$descripcion['titulo'].'</span>'.' <span>'.$descripcion['descripcion'].'</span>';
                                    if ( $index < count($productoHERE['descripcion']) ) {
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
                                foreach ($productoHERE['especificaciones'] as $especificacion) {
                                    $spec = '<span class="text-bold">'.$especificacion['titulo'].'</span><br>'.' <span>'.$especificacion['descripcion'].'</span>';
                                    if ( $index < count($productoHERE['especificaciones']) ) {
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
                                foreach ($productoHERE['documentos'] as $documento) {
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
                <h3 class="custom-animation custom-animation-bottom">Otros productos</h3>
                <h2 class="custom-animation custom-animation-top">También te puede interesar</h2>
                <div class="refacciones-grid mt-2">
                    <?php
                        foreach ($otherProductsToShow as $otherProduct) {
                            echo '
                            <a href="/equipos/detalle.php?producto='.$otherProduct['url_id'].'" class="refaccion equipo-item custom-animation custom-animation-bottom">
                                <img src="/assets/db/images/'.$otherProduct['imagen_url'].'" alt="">
                                <h2>'.$otherProduct['nombre'].'</h2>
                            </a>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('../partial_views/lo_que_buscas.php') ?>
    <?php include('../partial_views/footer.php') ?>
</body>
</html>