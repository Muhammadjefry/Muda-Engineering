<?php

require_once("app/master.php");

// instance = pemanggilan object class

$Calon1 = new CalonPolisi("Udin", "Pria", 15 / 06 / 2025, "Indramayu", 54, 45, 89, 45);
$Calon1->nama = "Udin";
$Calon1->keterangan(90, 45);
