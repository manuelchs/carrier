<?php
    $productos = [];
    $stringJSON = file_get_contents("../assets/db/productos.json");
    $db = json_decode($stringJSON, true);
    
    foreach ($db['carrierProductos'] as $product) {
        if ( $product['categoria'] == 'Tráiler') {
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

    <div class="hero shop-hero trailer-hero">
        <div class="general-max-width">
            <div class="info">
                <h3 class="custom-animation custom-animation-bottom">Equipos</h3>
                <h1 class="custom-animation custom-animation-top">Unidades para Tráiler</h1>
                <p class="custom-animation custom-animation-bottom">Desde el transporte de larga distancia hasta la distribución, cada unidad ha sido diseñada para maximizar el rendimiento de su cadena de frío y optimizar su costo de propiedad mientras se minimiza el impacto ambiental.</p>
            </div>

            <div class="img">
            </div>
        </div>
    </div>

    <div class="main-wrapper shop">
        <div class="general-max-width">
            <div class="title-shop">
                <h1 class="custom-animation custom-animation-bottom">Productos</h1>
                <div class="route custom-animation custom-animation-top"><a href="/equipos.php">Productos</a><i class="fal fa-chevron-right"></i><span>Tráiler</span></div>
                <h3 class="mb-2 custom-animation custom-animation-top">Tráiler</h3>
            </div>
            <div class="refacciones-grid">
                <?php
                    foreach( $productos as $producto ) {
                        echo '
                        <a href="/equipos/detalle.php?producto='.$producto['url_id'].'" class="refaccion equipo-item custom-animation custom-animation-bottom">
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