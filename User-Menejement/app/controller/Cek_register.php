<?php

include 'Auth.php';
$log = new Auth();

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$rule = $_POST['rule'];
$email = $_POST['email'];

if (empty($username) || empty($fullname) || empty($gender) || empty($rule) || empty($email)) {
    // Jika ada bidang yang kosong, atur pesan kesalahan
    session_start();
    $_SESSION['pesan'] = "Please complete all fields 😠";
    header('Location:../../public/v_register.php');
    exit();
}

$login_status = $log->checkRegister($username, $fullname, $gender, $rule, $email);

if ($login_status == 'data_Ada') {
    session_start();

    $_SESSION['pesan'] = "User is already registered 😎";
    header('Location:../../public/v_register.php');
    exit();
} elseif ($login_status == 'data_TidakAda') {
    session_start();

    $_SESSION['pesan'] = "Succesfully Register 😊";
    header('Location:../../public/v_register.php');
} else {
    header('Location:../../public/v_register.php');
}
