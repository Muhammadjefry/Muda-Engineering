<?php
// koneksi database
include "koneksi.php";


$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_k = $_POST['jenis_k'];


// menginput data ke database
mysqli_query($koneksi, "INSERT INTO data_tb(nama,umur,jenis_k) VALUES ('$nama',$umur,'$jenis_k')");
// mengalihkan halamn kembali ken index
header("location:../Tugas/table.php");
