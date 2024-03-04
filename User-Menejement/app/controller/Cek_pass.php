<?php
include 'Auth.php';
$log = new Auth();

// Periksa apakah $_SESSION['username'] telah di-set sebelumnya
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $log->checkPass($username, $password);


    if ($login == 'admin') {
        header('Location:../../public/v_admin.php');
        exit();
    } elseif ($login == 'user1_On') {

        session_start();

        $_SESSION['login'] = $login;
        header('Location:../../public/v_user.php');
        exit();
    } elseif ($login == 'user2_On') {

        session_start();

        $_SESSION['login'] = $login;
        header('Location:../../public/v_user.php');
        exit();
    } elseif ($login == 'user3_On') {

        session_start();

        $_SESSION['login'] = $login;
        header('Location:../../public/v_user.php');
        exit();
    } elseif ($login == 'not_found') {
        echo "Password salah";
    }
} else {
    echo "Data yang diperlukan tidak lengkap";
}
