<?php

require_once "app/master.php";

$nasabah = new Bank("Sahel", 1000000, "123");
$nasabah1 = new Bank("Moci", 5000, "3231");
$nasabah->info();
$nasabah1->info();
