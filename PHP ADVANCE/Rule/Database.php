<?php


class database
{
    public $sql;

    public function conection($localhost, $username, $password, $database)
    {
        return new mysqli($localhost, $username, $password, $database);
    }
}

$db = new database();
$conn = $db->conection("localhost", "root", "", "Coba");

// var_dump($conn);

$result = "SELECT * FROM data_rule";


$nilai = $conn->query($result);


$n = mysqli_fetch_array($nilai);

var_dump($n);
