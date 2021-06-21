<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <title>Carrier Transicold - Contacto</title>
    <script src="/assets/scripts/contact.js"></script>
</head>
<body>
    <?php $page = 'contacto'; ?>
    <?php include('partial_views/navbar.php') ?>
    <div class="hero contacto-hero">
        <div class="general-max-width">
            <div class="info">
                <h3>Contacto</h3>
                <h1>Centro de atención<br><span>Carrier Transicold GDL</span></h1>
                <p>Si deseas comunicarte no dudes en llamarnos o dejarnos un mensaje, con gusto atenderemos cualquier duda, sugerencia o comentario que desees hacernos.</p>
            </div>
            <div class="img bottom-mobile">
                <img src="/assets/images/contacto/servicio-cliente-carrier-transicold.png" alt="">
            </div>
        </div>
    </div>

    <div class="main-wrapper contact-form-wrapper">
        <div class="general-max-width">
            <div class="blue-section">
                <div class="title-centered">
                    <h3>Directorio</h3>
                    <h2>Habla con los expertos</h2>
                </div>
                <a class="data-contact">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p>
                        <span>Periférico Sur 5265-A</span>
                        <span>Tlaquepaque, Jalisco.</span>
                    </p>
                </a>
                <a class="data-contact">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p>
                        <span>(33) 3689 1067</span>
                        <span>Atención al cliente</span>
                    </p>
                </a>
                <a class="data-contact">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p>
                        <span>(33) 3689 1067</span>
                        <span>Dpto. Ventas</span>
                    </p>
                </a>
                <a class="data-contact">
                    <div class="icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <p>
                        <span>(33) 36891067</span>
                        <span>Whatsapp</span>
                    </p>
                </a>
            </div>
            <div class="form-wrapper">
                <div class="title-centered">
                    <h3>Escríbenos</h3>
                    <h2>Queremos escucharte</h2>
                </div>
                <form id="contact-form" action="sendemail.php" method="post">
                    <div class="grid-inputs">
                        <input class="main-input" type="text" placeholder="Nombre" name="nombre">
                        <input class="main-input" type="text" placeholder="E-mail" name="email">
                        <input class="main-input" type="text" placeholder="Número de teléfono" name="telefono">
                        <input class="main-input" type="text" placeholder="Empresa" name="nombre-empresa">
                        <textarea class="main-input" name="mensaje" placeholder="Tu mensaje aquí"></textarea>
                    </div>
                    <button class="main-button green-button"><span>Enviar mensaje</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="main-wrapper facebook-banner">
        <div class="general-max-width">
            <img src="/assets/images/contacto/icono-distribuidor-oficial.png" alt="">
            <h3>Búscanos en <i class="fab fa-facebook"></i></h3>
            <button class="main-button green-button icon icon-right"><span>Ir a facebook</span><i class="far fa-long-arrow-right"></i></button>
        </div>
    </div>

    <div class="map">
        <iframe style="display: block; border: 0;" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.0375304764934!2d-103.33019918396896!3d20.58652488623958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b2b6c659f03b%3A0x8cec810c5b460c9a!2sRefrigeraci%C3%B3n%20Especializada%20para%20el%20Transporte%20de%20Occidente!5e0!3m2!1ses-419!2smx!4v1624260085644!5m2!1ses-419!2smx" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div id="alert">
        <button onclick="closeAlert();"><i class="far fa-times"></i></button>
        <h2 id="titleAlert"></h2>
        <p id="messageAlert"></p>
    </div>
    <?php include('partial_views/footer.php') ?>
</body>
</html>