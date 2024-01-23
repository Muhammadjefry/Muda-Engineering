<?php

// Function

// 1. no argumen and no return
//:void
function hello()
{

    echo 'hallo sayang' . PHP_EOL;
    echo 'Kamu udah makan blum' . PHP_EOL;
}
hello();

// 2.  argumen and no return
function introduce($name, $age, $grade)
{
    echo 'Hello my name is ' . $name . PHP_EOL;
    echo 'I am ' . $age . PHP_EOL;
    echo 'I am ' . $grade  . PHP_EOL;

    // return;
}

introduce("jefry", 18, 'semseter 1');

// 3.  argumen and return
function add($num1, $num2): float
{
    $hasil = $num1 + $num2;
    return $hasil;
}

echo add(10, 9);




function tambah($num1, $num2)
{
    $hasil = $num1 + $num2;
    return $hasil;
}

echo tambah(10, 5);



function kurang($num1, $num2)
{
    $hasil = $num1 - $num2;
    return $hasil . PHP_EOL;
}

echo kurang(10, 5);



function kali($num1, $num2)
{
    $hasil = $num1 * $num2;
    return $hasil . PHP_EOL;
}

echo kali(10, 5);



function bagi($num1, $num2)
{
    $hasil = $num1 / $num2;
    return $hasil . PHP_EOL;
}

echo bagi(10, 5);
