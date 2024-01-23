<?php


class Pegawai
{
    public string $name;
    public int $age;
    public string $gender;
    public string $status;


    public function __construct(string $name, int $age, string $gender, string $status)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->status = $status;
    }
    public function identity()
    {
        echo "Name :" . $this->name . PHP_EOL;
        echo "Age :" . $this->age . PHP_EOL;
        echo "Gender :" . $this->gender . PHP_EOL;
        echo "Status :" . $this->status . PHP_EOL;
    }
}


class SPV extends Pegawai
{
    public string $divisi;

    public function __construct(string $name, int $age, string $gender, string $status, string $divisi)
    {
        parent::__construct($name, $age,  $gender,  $status, $divisi);
        $this->divisi = $divisi;
    }

    public function identity()
    {
        // echo "Name :" . $this->name . PHP_EOL;
        // echo "Age :" . $this->age . PHP_EOL;
        // echo "Gender :" . $this->gender . PHP_EOL;
        // echo "Status :" . $this->status . PHP_EOL;
        parent::identity();
        echo "Divisi :" . $this->divisi . PHP_EOL;
    }
}

class Manajer extends SPV
{
    public string $departement;

    public function __construct(string $name, int $age, string $gender, string $status, string $divisi, string $departement)
    {
        parent::__construct($name, $age,  $gender,  $status, $divisi, $departement);
        $this->departement = $departement;
    }

    public function identity()
    {
        // echo "Name :" . $this->name . PHP_EOL;
        // echo "Age :" . $this->age . PHP_EOL;
        // echo "Gender :" . $this->gender . PHP_EOL;
        // echo "Status :" . $this->status . PHP_EOL;
        // echo "Divisi :" . $this->divisi . PHP_EOL;
        parent::identity();
        echo "Departement :" . $this->departement . PHP_EOL;
    }
}

class Direktur extends Manajer
{
    public string $wilayah;

    public function __construct(string $name, int $age, string $gender, string $status, string $divisi, string $departement, string $wilayah)
    {

        parent::__construct($name, $age,  $gender,  $status, $divisi, $wilayah);
        $this->wilayah = $wilayah;
    }

    public function identity()
    {
        // echo "Name :" . $this->name . PHP_EOL;
        // echo "Age :" . $this->age . PHP_EOL;
        // echo "Gender :" . $this->gender . PHP_EOL;
        // echo "Status :" . $this->status . PHP_EOL;
        // echo "Divisi :" . $this->divisi . PHP_EOL;
        // echo "Departement :" . $this->departement . PHP_EOL;
        parent::identity();
        echo "Wilayah :" . $this->wilayah . PHP_EOL;
    }
}
