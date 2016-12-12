<?php
include("config/config.config.php");
session_start();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

if ($action == 'login'):
    if($_SERVER["REQUEST_METHOD"] == "POST"):
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = md5(mysqli_real_escape_string($connection, $_POST['password']));

        $sql = "SELECT username, active FROM users WHERE username = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($connection, $sql);
        $user = mysqli_fetch_object($result);

        $count = mysqli_num_rows($result);
        if($count == 1):
            $_SESSION['session_user'] = $user;
            header("location: index.php");
        else:
            header("location: login.php?msg=invalid");
        endif;
    endif;
endif;

if ($action == 'logout'):
    if(session_destroy()):
        header("Location: login.php?msg=logout");
    endif;
endif;

header("Location: login.php");
