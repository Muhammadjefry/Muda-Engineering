<?php

require_once("app/master.php");

// instance = pemanggilan object class

$nasabah1 = new Bank("jefry", 1000000, "111");
$nasabah1->accountName = "Jefry";
$nasabah1->info();
$nasabah1->debit(1000);
