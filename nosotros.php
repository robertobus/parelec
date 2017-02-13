<?php
// Archivo configuracion
$config = parse_ini_file('config/config_app.ini', true);
?>
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

    <style type="text/css">
        .team-section-grid {
            background-size: cover; background-repeat: no-repeat;
            height: 200px;
        }
    </style>

</head>
<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <?php include 'partials/header_nav.php' ?>

            <div class="fh5co-parallax" style="background-image: url(images/nosotros/nosotros-fondo-1.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell animate-box">
                                <h1 class="text-center">Nuestra Empresa</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end: fh5co-parallax -->
            <!-- end:fh5co-hero -->
            <div id="fh5co-team-section">
                <div class="container">
                    <div class="row about">
                        <div class="col-md-6 col-md-offset-0">
                            <img style="height: 250px;" class="img-responsive animate-box" src="images/nosotros/nosotros-foto-1.jpg" alt="Nosotros">
                        </div>
                        <div class="col-md-6 col-md-offset-0">
                            <img style="height: 250px;" class="img-responsive animate-box" src="images/nosotros/nosotros-foto-2.jpg" alt="Nosotros">
                        </div>
                        <div class="col-md-12 col-md-offset-0 animate-box">
                            <p>SOMOS UNA EMPRESA ESPECIALIZADA EN LA FABRICACION DE MATERIALES ESTAMPADOS, FERREOS Y NO FERREOS PARA LINEAS ELECTRICAS DE BAJA Y MEDIA TENSION.</p>
                            <blockquote>
                                <p>CONTAMOS CON UNA TRAYECTORIA DE 10 AÑOS EN EL MERCADO.</p>
                            </blockquote>
                            <p>CON UNA PLANTA FABRIL DE 2000 MTRS2; EQUIPADA CON DIVERSAS MAQUINAS DE ESTAMPADO, ROSCADO, HORNOS ELECTRICOS DE FUNDICION DE ALUMINIO Y SUS ALEACIONES; Y HORNOS DE FUNDICION DE HIERRO Y SUS ALEACIONES.</p>
                            <blockquote>
                                <p>DESDE NUESTRA PLANTA INDUSTRIAL UBICADA EN RANCHOS PCIA DE BS.AS. ABASTECEMOS A DISTINTOS SECTORES DE MERCADO ELECTRICO EN TODAS SUS RAMAS.</p>
                            </blockquote>
                            <p>DESDE NUESTRO INICIO LOGRAMOS CUMPLIR CON CALIDAD Y ENTREGA, POR LO QUE HEMOS LOGRADO CONVERTIRNOS EN UNA FIRMA DE RECONOCIMIENTO EN EL MERCADO ELECTRICO.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="heading-section text-center animate-box">
                                <h2>Galería</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <?php $imagenes = array('nosotros-foto-10.jpg', 'nosotros-foto-4.jpg', 'nosotros-foto-9.jpg', 'nosotros-foto-6.jpg', 'nosotros-foto-7.jpg', 'nosotros-foto-8.jpg', 'nosotros-foto-5.jpg', 'nosotros-foto-3.jpg'); ?>
                        <?php foreach ($imagenes as $imagen): ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-section-grid animate-box" style="background-image: url(images/nosotros/<?php echo $imagen ?>);">
                                <div class="overlay-section">
                                    <div class="desc">
                                        <h3><b>PAR</b>-ELEC Srl</h3>
                                        <!--<span>Body Trainer</span>-->
                                        <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>-->
                                        <p class="fh5co-social-icons">
                                            <a href="https://twitter.com/parelecsrl" target="_blank"><i class="icon-twitter-with-circle"></i></a>
                                            <a href="http://facebook.com/parelecsrl" target="_blank"><i class="icon-facebook-with-circle"></i></a>
                                            <a href="https://www.instagram.com/par_elecsrl" target="_blank"><i class="icon-instagram-with-circle"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

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
