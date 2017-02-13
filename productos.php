<?php
// Archivo configuracion
$config = parse_ini_file('config/config_app.ini', true);

// Conectando, seleccionando la base de datos
try {
    $pdo_conn = new PDO(
        "mysql:host={$config['database']['db.host']};dbname={$config['database']['db.name']}",
        $config['database']['db.user'],
        $config['database']['db.password'],
        array(PDO::ATTR_PERSISTENT => true)
    );
    $qProducts = $pdo_conn->prepare('SELECT * FROM products');

    if ($qProducts):
        $qProducts->execute();
    endif;

}catch (PDOException $e){
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


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
        .block-product .thumbnail .caption h3 {
            font-family: "Verdana", Arial, sans-serif; font-size: 1em;
            text-transform: uppercase;
            margin-bottom: 6px !important;
            text-align: center;
        }
        .block-product .thumbnail .btn {
            text-transform: none;
            letter-spacing: normal;
        }
    </style>

    <style type="text/css">
        .team-section-grid {
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            height: 300px;
        }
        .team-section-grid .overlay-section .desc {
            height: 300px;
        }
        .team-section-grid .overlay-section .desc .btn{
            text-transform: none;
            letter-spacing: normal;
        }
    </style>

</head>
<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <?php include 'partials/header_nav.php' ?>

            <div class="fh5co-parallax" style="background-image: url(images/products-image.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell animate-box">
                                <h1 class="text-center">Nuestros Productos</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end: fh5co-parallax -->

            <!-- end:fh5co-hero -->
            <div id="fh5co-team-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="heading-section text-center animate-box">
                                <h2>Prodcutos de Herraje y Morsería</h2>
                                <p>
                                <div class="input-group">
                                    <span class="input-group-addon">Buscar</span>
                                    <input id="filtrar" type="text" class="form-control" placeholder="Ingrese descripción o categoría del producto que desea buscar ...">
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="block-search row text-center animate-box">
                        <?php while($product = $qProducts->fetch()): ?>
                            <?php $data = false; ?>
                        <div class="box-article col-lg-3 col-md-4 col-sm-6" data-search="<?php echo "{$product['name']}" ?>">
                            <div class="team-section-grid animate-boxx" style="background-image: url(<?php echo $config['app']['path.image.product'] ."/". $product['image'] ?>);">
                                <div class="overlay-section">
                                    <div class="desc">
                                        <?php if ($data): ?>
                                        <a href="<?php echo "images/productos/ET/{$product['attached']}" ?>" target="_blank" class="btn btn-default btn-xs">
                                            <i class="glyphicon glyphicon-save-file"></i>
                                            Especificaciones Técnicas
                                        </a>
                                        <?php endif; ?>
                                        <br><br><br><br>
                                        <h3 style="margin-bottom: 0px;"><?php echo $product['name'] ?></h3>
                                        <!--<span>Body Trainer</span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                        <p class="fh5co-social-icons">
                                            <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-list"></i></a>
                                        </p>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
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

    <script>
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.block-search .box-article').hide();
                    $('.block-search .box-article').filter(function () {
                        return rex.test($(this).attr('data-search'));
                        /* return rex.test($(this).text()); */
                    }).fadeIn(300); /*.show();*/
                })
            }(jQuery));
        });
    </script>

</body>
</html>
