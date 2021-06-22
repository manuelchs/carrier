<?php
    $productosVelocidad = [];
    $productosCamion = [];
    $productosTrailer = [];
    
    foreach ($db['carrierProductos'] as $product) {
        if ( $product['categoria'] == 'Velocidad variable') {
            array_push($productosVelocidad, $product);
        }
        if ( $product['categoria'] == 'Camión') {
            array_push($productosCamion, $product);
        }
        if ( $product['categoria'] == 'Tráiler') {
            array_push($productosTrailer, $product);
        }
    }
?>
<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "106651161159490");
  chatbox.setAttribute("attribution", "page_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<nav class="nav nav-desktop">
    <div class="white-section">
        <div class="general-max-width">
            <a class="logo" href="/">
                <img src="/assets/images/logo-carrier-transicold.png" alt="">
            </a>
            <div class="data-contact">
                <a target="_blank" href="https://goo.gl/maps/Kiqo5HrHDqkMdMDq8" class="data-contact-item">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="description">
                        <div class="title">Periférico Sur 5265-A</div>
                        <div class="subtitle">Tlaquepaque, Jalisco</div>
                    </div>
                </a>

                <a href="tel:+553336891067" class="data-contact-item">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="description">
                        <div class="title">(33) 3689 1067</div>
                        <div class="subtitle">Atención al cliente</div>
                    </div>
                </a>

                <a target="_blank" href="https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20estoy%20interesado%20en%20equipo%20de%20refrigeraci%C3%B3n%20para%20mi%20transporte%20%E2%9D%84%EF%B8%8F" class="data-contact-item">
                    <div class="icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="description">
                        <div class="title">(33) 3454 0499</div>
                        <div class="subtitle">Whatsapp</div>
                    </div>
                </a>
            </div>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20estoy%20interesado%20en%20equipo%20de%20refrigeraci%C3%B3n%20para%20mi%20transporte%20%E2%9D%84%EF%B8%8F" class="main-button green-button icon icon-left hover-white"><i class="fab fa-whatsapp"></i><span>Chatear por Whatsapp</span></a>
        </div>
    </div>

    <div class="blue-section">
        <div class="general-max-width">
            <ul>
                <li>
                    <a class="<?php if ( $page === 'home') { echo 'active'; } ?>" href="/"><span>Inicio</span></a>
                </li>
                <li class="submenu-trigger">
                    <a class="<?php if ( $page === 'equipos') { echo 'active'; } ?>" href="/equipos.php"><span>Equipos</span><i class="far fa-chevron-down"></i></a>
                    <div class="submenu-navbar">
                        <div class="menu-list">
                            <span>Velocidad variable</span>
                            <?php
                                foreach( $productosVelocidad as $producto ) {
                                    echo '<a href="/equipos/detalle.php?idProducto='.$producto['id'].'">'.$producto['nombre'].'</a>';
                                }
                            ?>
                        </div>
                        <div class="menu-list">
                            <span>Camión</span>
                            <?php
                                foreach( $productosCamion as $producto ) {
                                    echo '<a href="/equipos/detalle.php?idProducto='.$producto['id'].'">'.$producto['nombre'].'</a>';
                                }
                            ?>
                        </div>
                        <div class="menu-list">
                            <span>Tráiler</span>
                            <?php
                                foreach( $productosTrailer as $producto ) {
                                    echo '<a href="/equipos/detalle.php?idProducto='.$producto['id'].'">'.$producto['nombre'].'</a>';
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="<?php if ( $page === 'refacciones') { echo 'active'; } ?>" href="/refacciones.php"><span>Refacciones</span></a>
                </li>
                <li>
                    <a class="<?php if ( $page === 'servicio') { echo 'active'; } ?>" href="/servicio-tecnico.php"><span>Servicio técnico</span></a>
                </li>
                <li>
                    <a class="<?php if ( $page === 'contacto') { echo 'active'; } ?>" href="/contacto.php"><span>Contacto</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<nav class="nav nav-mobile">
    <div class="white-section">
        <div class="top-section">
            <div class="general-max-width">
                <a href="/" class="logo">
                    <img src="/assets/images/logo-carrier-transicold.png" alt="">
                </a>
                <div class="slider-wrapper">
                    <div id="sliderDos" class="slider column">
                        <div id="itemDos1" class="slider-item">
                            <div class="data-contact">
                                <a target="_blank" href="https://goo.gl/maps/Kiqo5HrHDqkMdMDq8" class="data-contact-item">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="description">
                                        <div class="title">Periférico Sur 5265-A</div>
                                        <div class="subtitle">Tlaquepaque, Jalisco</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="itemDos2" class="slider-item">
                            <div class="data-contact">
                                <a href="tel:+553336891067" class="data-contact-item">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="description">
                                        <div class="title">(33) 3689 1067</div>
                                        <div class="subtitle">Atención al cliente</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="itemDos3" class="slider-item">
                            <div class="data-contact">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20estoy%20interesado%20en%20equipo%20de%20refrigeraci%C3%B3n%20para%20mi%20transporte%20%E2%9D%84%EF%B8%8F" class="data-contact-item">
                                    <div class="icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="description">
                                        <div class="title">(33) 3454 0499</div>
                                        <div class="subtitle">Whatsapp</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-section">
            <div class="general-max-width">
                <button id="barsButtonMobile" class="bars"><i class="fas fa-bars"></i></button>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=523334540499&text=Hola%2C%20estoy%20interesado%20en%20equipo%20de%20refrigeraci%C3%B3n%20para%20mi%20transporte%20%E2%9D%84%EF%B8%8F" class="main-button green-button icon icon-left"><i class="fab fa-whatsapp"></i><span>Chatear por Whatsapp</span></a>
                <a href="tel:+553336891067" class="phone"><i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>
    <div id="barsMenuMobile" class="blue-section">
        <ul>
            <li><a href="/">Inicio</a></li>
            <li id="pageMenuTrigger"><a>Equipos <i class="far fa-arrow-right"></i></a></li>
            <li><a href="/refacciones.php">Refacciones</a></li>
            <li><a href="/servicio-tecnico.php">Servicio técnico</a></li>
            <li><a href="/contacto.php">Contacto</a></li>
        </ul>
    </div>
</nav>

<div id="equipoPageMenu" class="page-menu">
    <div class="header">
        <i id="closePageMenu" class="far fa-arrow-left"></i>
        <a href="/equipos.php">Equipos</a>
    </div>
    <div class="links">
        <div class="links-item">
            <div class="title">
                <span>Velocidad Variable</span>
                <i class="far fa-plus"></i>
            </div>
            <div class="links-list">
                <?php
                    foreach( $productosVelocidad as $producto ) {
                        echo '<a href="/equipos/detalle.php?idProducto='.$producto['id'].'">'.$producto['nombre'].'</a>';
                    }
                ?>
            </div>
        </div>
        <div class="links-item">
            <div class="title">
                <span>Camión</span>
                <i class="far fa-plus"></i>
            </div>
            <div class="links-list">
                <?php
                    foreach( $productosCamion as $producto ) {
                        echo '<a href="/equipos/detalle.php?idProducto='.$producto['id'].'">'.$producto['nombre'].'</a>';
                    }
                ?>
            </div>
        </div>
        <div class="links-item">
            <div class="title">
                <span>Tráiler</span>
                <i class="far fa-plus"></i>
            </div>
            <div class="links-list">
                <?php
                    foreach( $productosTrailer as $producto ) {
                        echo '<a href="/equipos/detalle.php?idProducto='.$producto['id'].'">'.$producto['nombre'].'</a>';
                    }
                ?>
            </div>
        </div>
    </div>
    
</div>



<!-- <a class="data-contact-item">
    <div class="icon">
        <i class="fas fa-phone"></i>
    </div>
    <div class="description">
        <div class="title">(33) 3689 1067</div>
        <div class="subtitle">Atención al cliente</div>
    </div>
</a>

<a class="data-contact-item">
    <div class="icon">
        <i class="fas fa-map-marker-alt"></i>
    </div>
    <div class="description">
        <div class="title">(33) 3689 1067</div>
        <div class="subtitle">Whatsapp</div>
    </div>
</a> -->