<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_k = $_POST['jenis_k'];



// update data ke database
mysqli_query($koneksi, "UPDATE data_tb SET nama='$nama', umur=$umur, jenis_k='$jenis_k' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:../Tugas/table.php");
