<?php include('config/session.config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAR-ELEC SRL</title>

    <?php include ('partials/admin_header.php') ?>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-bolt"></i> <span>PAR-ELEC SRL</span></a>
                </div>

                <div class="clearfix"></div>
                <br/>

                <!-- sidebar menu -->
                <?php include ('partials/admin_siderbar_menu.php') ?>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <?php include ('partials/admin_top_navigation.php') ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <!-- page content top_tiles -->
                <?php //include ('partials/admin_top_tiles.php') ?>
                <!-- /page content top_tiles -->
                <br/>

                <?php if (isset($_REQUEST['controller'])): ?>
                    <?php if ($_REQUEST['controller'] == 'product'): ?>
                        <?php include ('controllers/ProductController.php'); ?>
                    <?php else: ?>
                        <?php include ('controllers/HomeController.php'); ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php include ('controllers/HomeController.php'); ?>
                <?php endif; ?>

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<?php include ('partials/admin_footer_scripts.php') ?>

</body>
</html>