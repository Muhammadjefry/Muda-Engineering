<?php


require_once "app/chain.php";


$text = new manipulateString("Sulaiman");

echo $text->reverse()
    ->uppercase()
    ->append(" ganteng")
    ->append(" pisan ")
    ->reverse()
    ->getString(" ");
