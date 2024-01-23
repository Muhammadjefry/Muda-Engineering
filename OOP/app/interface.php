<?php

interface Car extends Gasoline
{
    const name = "Car";
}

interface Gasoline
{
    const gass = "Solar";
}

interface Offoard
{
    const mechanis = "4x4";
}

class Sedan implements Offoard
{
    public string $model = "Sedan";
}

class Honda implements Gasoline
{
    public string $model = "PCX";
}
