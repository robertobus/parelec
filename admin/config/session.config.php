<?php
include('config/config.config.php');
session_start();

if(!isset($_SESSION['session_user'])):
    header("location:login.php?msg=expire_session");
endif;

$session_user = $_SESSION['session_user'];
