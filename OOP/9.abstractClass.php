<?php

require_once "app/abstract.php";

$pelanggan = new Basic();
$Pelanggan = new Basic();

$pelanggan2 = new Premium();
$pelanggan3 = new Free();

$pelanggan::getName();
$Pelanggan::getStatus();
$pelanggan2->status();
$pelanggan3->status();


// var_dump($pelanggan);
