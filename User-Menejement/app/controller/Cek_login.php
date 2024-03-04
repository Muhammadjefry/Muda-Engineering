<?php

include 'Auth.php';
$log = new Auth();

$username = $_POST['username'];

$login_status = $log->checkLogin($username);

if ($login_status == 'admin') {
    session_start();

    $_SESSION['login_status'] = $login_status;

    header('Location:../../public/v_pass.php');
    exit();
} elseif ($login_status == 'user1_Off' || $login_status == 'user2_Off' || $login_status == 'user3_Off') {

    session_start();

    $_SESSION['message'] = "Your account is being verified";

    header('Location:../../index.php');
    exit();
} elseif ($login_status == 'user1_On' || $login_status == 'user2_On' || $login_status == 'user3_On') {

    session_start();

    $_SESSION['login_status'] = $login_status;
    $_SESSION['login_user'] = $username;


    header('Location:../../public/v_pass.php');
    exit();
} elseif ($login_status == 'user1_Banned' || $login_status == 'user2_Banned' || $login_status == 'user3_Banned') {

    session_start();

    $_SESSION['message'] = "your account is banned";

    header('Location:../../index.php');
    exit();
} elseif ($login_status == 'not_found') {

    session_start();

    $_SESSION['message'] = "User Not Found 🤣";

    header('Location:../../index.php');
    exit();
} else {
    session_start();

    $_SESSION['message'] = "Error System 🤣";

    header('Location:../../index.php');
    exit();
}
