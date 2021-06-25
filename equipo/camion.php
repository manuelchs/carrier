<?php
    $productos = [];
    $stringJSON = file_get_contents("../assets/db/productos.json");
    $db = json_decode($stringJSON, true);
    
    foreach ($db['carrierProductos'] as $product) {
        if ( $product['categoria'] == 'Camión') {
            array_push($productos, $product);
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../partial_views/head_tag.php') ?>
    <title>Carrier Guadalajara - Equipos - Camión</title>
</head>
<body>
    <?php $page = 'equipos'; ?>
    <?php include('../partial_views/navbar.php') ?>

    <div class="hero shop-hero camion-hero">
        <div class="general-max-width">
            <div class="info">
                <h3 class="custom-animation custom-animation-bottom">Equipos</h3>
                <h1 class="custom-animation custom-animation-top">Unidades para camión</h1>
                <p class="custom-animation custom-animation-bottom">La calidad de siempre, todo el nuevo poder de Supra. Con nueva tecnología, arquitectura de primera clase, mantenimiento reducido y costos operativos más bajos. No hay mejor momento para actualizar a la serie Supra®.</p>
            </div>
            <div class="img">
            </div>
        </div>
    </div>

    <div class="main-wrapper shop">
        <div class="general-max-width">
            <div class="title-shop">
                <h1 class="custom-animation custom-animation-bottom">Productos</h1>
                <div class="route custom-animation custom-animation-top"><a href="/equipos/">Productos</a><i class="fal fa-chevron-right"></i><span>Camión</span></div>
                <h3 class="mb-2">Camión</h3>
            </div>
            <div class="refacciones-grid">
                <?php
                    foreach( $productos as $producto ) {
                        echo '
                        <a href="/equipo/'.$producto['url_id'].'" class="refaccion equipo-item custom-animation custom-animation-bottom">
                            <img src="/assets/db/images/'.$producto['imagen_url'].'" alt="">
                            <h2>'.$producto['nombre'].'</h2>
                        </a>';
                    }
                ?>
            </div>
        </div>
    </div>
    <?php include('../partial_views/lo_que_buscas.php') ?>
    <?php include('../partial_views/footer.php') ?>
</body>
</html>