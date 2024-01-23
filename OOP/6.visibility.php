<?php

/*
public = dapat diacses diclass, diturunan dan diluar

*/

require_once "app/src.php";

$nasabah = new Bank("suripto", 10000);
$nasabah->identity();
