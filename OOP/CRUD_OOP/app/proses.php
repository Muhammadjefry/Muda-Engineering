<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $db->input($_POST['nama'], $_POST['umur'], $_POST['jenis_k']);
    header("location:../view.php");
} elseif ($aksi == "hapus") {
  
    $db->hapus($_GET['id']);
    header("location:../view.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nama'], $_POST['umur'], $_POST['jenis_k']);
    header("location:../view.php");
}
