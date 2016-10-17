
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PAR-ELEC Srl.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FABRICACIÓN DE PRODUCTOS ELABORADOS EN METAL N.C.P." />
    <meta name="keywords" content="fundición, metales, aluminio, electricos" />
    <meta name="author" content="PARELEC Srl." />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        <?php include 'partials/header_nav.php' ?>

        <?php include 'partials/home_slide.php' ?>

        <div id="fh5co-team-section" class="fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>SOBRE NOSOTROS</h2>
                            <p>Somos una empresa especializada en productos de fundición de metales NCP. Contamos con una planta fabril de 3800 m2 y 9 máquinas inyectoras que van desde las 150 hasta las 1100 toneladas de presión de cierre. Nuestro proceso está perfectamente monitoreado y controlado, esto hace posible que nuestros objetivos sean logrados y optimizados mediante planes de mejoras continuas. Estamos certificados bajo las normas ISO 9001:2008 y proximamente certificaremos ISO/TS16949.</p>
                            <p>Desde nuestra Planta Industrial ubicada en la ciudad de Ranchos, provincia de Buenos Aires donde abastecemos a distintos sectores del mercado cubriendo la industria automotriz, el mercado de la iluminación, repuestos y piezas varias.</p>
                            <p>Desde nuestro inicio hemos logrado cumplir con éxito las máximas exigencias de calidad y entrega. Por este motivo y gracias a nuestro constante deseo por autosuperarnos nos hemos convertido hoy en una firma de reconocimiento internacional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-team-section -->

        <div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">SERVICIOS Y PRODUCTOS ELABORADOS EN METAL</h1>
                            <p>Consulte nuestra sección de <a href="#">PRODUCTOS</a> y <a href="#">SERVICIOS</a>, o contacte con nosotros <a href="#">CONTACTO</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: fh5co-parallax -->

        <div id="fh5co-team-section" class="fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>PRODUCTOS</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="team-section-grid animate-box" style="background-image: url(images/productos/product<?php echo $i ?>.jpg);">
                            <div class="overlay-section">
                                <div class="desc">
                                    <h3>Producto <?php echo $i ?></h3>
                                    <span>Descripción y características</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut viverra lorem. In euismod odio in tellus vestibulum ullamcorper. Vivamus.</p>
                                    <p class="fh5co-social-icons">
                                        <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                        <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                        <a href="#"><i class="icon-instagram-with-circle"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- fh5co-team-section -->

        <footer>
            <?php include 'partials/footer.php' ?>
        </footer>

    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>
</body>
</html>