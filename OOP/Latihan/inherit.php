<?php

require_once "app/src.php";


$nasabah1 = new Pegawai("Maman", 23, "Pria", "Single");
$nasabah1->identity() . PHP_EOL;

$nasabah2 = new SPV("Anisa", 23, "Wanita", "Married", "IT");
$nasabah2->identity() . PHP_EOL;

$nasabah3 = new Manajer("Jojon", 23, "Pria", "Married", "Manajer", "Keamanan");
$nasabah3->identity() . PHP_EOL;

$nasabah4 = new Direktur("Anita", 23, "Wanita", "Single", "HRD", "Keamanan", "Jakarta");
$nasabah4->identity() . PHP_EOL;
