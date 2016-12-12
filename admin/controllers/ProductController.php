<?php
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

if ($action == 'new'):
    $dynamic_styles = array();
    $dynamic_scripts = array();

    include ('view/product/new_product.php');
endif;
if ($action == 'list'):
    $dynamic_styles = array(
        '<link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">'
    );
    $dynamic_scripts = array(
        '<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>',
        '<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>',
        '<script src="js/product/product-list.js"></script>'
    );

    $query = "SELECT * FROM product";
    $mysqli_products = $connection->query($query);

    foreach ($dynamic_styles as $dynamic_style ): echo $dynamic_style; endforeach;
    include ('view/product/list_product.php');
endif;