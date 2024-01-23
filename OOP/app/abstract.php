<?php

//ABSTRACT TIDAK BISA KELUAR PAGE, HANYA BISA INHERIT SAJA

abstract class Customer
{
    public string $name;

    public static function getName()
    {

        echo "Customer Name is jefry" .  PHP_EOL;
    }

    public static function getStatus()
    {

        echo "Jefry is CEO" .  PHP_EOL;
    }

    abstract function status(): void;
}

class Basic extends Customer
{
    public int $price;

    public function status(): void
    {
        echo "Status Basic" . PHP_EOL;
    }
}


class Premium extends Customer
{
    public function status(): void
    {
        echo "Status Premium" . PHP_EOL;
    }
}

class Free extends Customer
{
    public function status(): void
    {
        echo "Status Free" . PHP_EOL;
    }
}
