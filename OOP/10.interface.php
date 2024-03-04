<?php

require_once "app/interface.php";

$mobil = new Sedan();
$motor = new Honda();

echo $mobil::mechanis . PHP_EOL;
echo $motor::gass;