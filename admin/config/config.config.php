<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'u442969788_pe');

$dynamic_styles = array();
$dynamic_scripts = array();

$connection = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if ($connection->connect_errno):
    header('Location: index.php?msg=db_errno');
endif;