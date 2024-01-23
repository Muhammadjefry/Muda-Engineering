<?php

namespace data;

require_once "app/first.php";
require_once "app/second.php";


//cara 1
//$text1 = new A();
//$text2 = new \data\A();


//cara 2
$text3 = new \A();
$text4 = new A(); // memamggil namespce
