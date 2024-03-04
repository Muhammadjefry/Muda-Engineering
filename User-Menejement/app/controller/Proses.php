<?php
include 'Auth.php';
$db = new Auth();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {

    $db->input($_POST['username'], $_POST['fullname'], $_POST['gender'], $_POST['email'], $_POST['rule'], $_POST['status']);
    header("location:../../public/v_admin.php");
} elseif ($aksi == "hapus") {

    $db->hapus($_GET['id']);
    header("location:../../public/v_admin.php");
} elseif ($aksi == "update") {

    $db->update($_POST['id'], $_POST['username'], $_POST['fullname'], $_POST['gender'], $_POST['email']);
    header("location:../../public/v_admin.php");
}
