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

$sql = "SELECT * FROM data_rule ";


$result = $conn->query($sql);


$n = $result->fetch_assoc();



var_dump($n);
