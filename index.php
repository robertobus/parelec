<?php //header('Location: http://www.parelec.com.ar/mantenimiento/'); ?>
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
    <meta name="description" content="FABRICACION DE PRODUCTOS FERREOS Y NO FERREOS PARA TENDIDO DE LINEAS ELECTRICAS RURALES Y URBANAS." />
    <meta name="keywords" content="fundición, metales, tendidos, electricos" />
    <meta name="author" content="parelec srl" />

    <?php include 'partials/head.php' ?>

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
                            <p>SOMOS UNA EMPRESA ESPECIALIZADA EN LA FABRICACION DE MATERIALES ESTAMPADOS, FERREOS Y NO FERREOS PARA LINEAS ELECTRICAS DE BAJA Y MEDIA TENSION.</p>
                            <p>CONTAMOS CON UNA TRAYECTORIA DE 10 AÑOS EN EL MERCADO.</p>
                            <p>CON UNA PLANTA FABRIL DE 2000 m. EQUIPADA CON DIVERSAS MAQUINAS DE ESTAMPADO, ROSCADO, HORNOS ELECTRICOS DE FUNDICION DE ALUMINIO Y SUS ALEACIONES; Y HORNOS DE FUNDICION DE HIERRO Y SUS ALEACIONES.</p>
                            <p>DESDE NUESTRA PLANTA INDUSTRIAL UBICADA EN RANCHOS PCIA DE BS.AS. ABASTECEMOS A DISTINTOS SECTORES DE MERCADO ELECTRICO EN TODAS SUS RAMAS.</p>
                            <p>DESDE NUESTRO INICIO LOGRAMOS CUMPLIR CON CALIDAD Y ENTREGA, POR LO QUE HEMOS LOGRADO CONVERTIRNOS EN UNA FIRMA DE RECONOCIMIENTO EN EL MERCADO ELECTRICO.</p>
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
                            <p>Consulte nuestra sección de <a href="#">PRODUCTOS</a> y <a href="#">SERVICIOS</a>, o contacte con nosotros <a href="/contacto.php">CONTACTO</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: fh5co-parallax -->

        <!--
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
                                    <h3>Producto <?php $i ?></h3>
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

<?php include 'partials/scripts.php' ?>

</body>
</html>