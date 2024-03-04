<?php

require_once("app/master.php");

// instance = pemanggilan object class

$nasabah1 = new Bank("Ijat", 1500, "12345");
$nasabah1->accountName = "Jefry";
$nasabah1->ballance = 100000;
$nasabah1->debit(5000);

// echo "Name : " . $nasabah1->accountName . PHP_EOL;


// echo "Debit : " . $nasabah1->ballance . PHP_EOL;