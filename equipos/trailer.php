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
    <title>Carrier Transicold - Equipos - Camión</title>
</head>
<body>
    <?php $page = 'equipos'; ?>
    <?php include('../partial_views/navbar.php') ?>

    <div class="hero shop-hero trailer-hero">
        <div class="general-max-width">
            <div class="info">
                <h3>Equipos</h3>
                <h1>Unidades para Tráiler</h1>
                <p>Desde el transporte de larga distancia hasta la distribución, cada unidad ha sido diseñada para maximizar el rendimiento de su cadena de frío y optimizar su costo de propiedad mientras se minimiza el impacto ambiental.</p>
            </div>

            <div class="img">
            </div>
        </div>
    </div>

    <div class="main-wrapper shop">
        <div class="general-max-width">
            <div class="title-shop">
                <h1>Productos</h1>
                <div class="route"><a href="/equipos.php">Productos</a><i class="fal fa-chevron-right"></i><span>Tráiler</span></div>
                <h3 class="mb-2">Tráiler</h3>
            </div>
            <div class="refacciones-grid">
                <?php
                    foreach( $productos as $producto ) {
                        echo '
                        <a href="/equipos/detalle.php?idProducto='.$producto['id'].'" class="refaccion equipo-item">
                            <img src="/assets/db/images/'.$producto['imagen_url'].'" alt="">
                            <h2>'.$producto['nombre'].'</h2>
                        </a>';
                    }
                ?>
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