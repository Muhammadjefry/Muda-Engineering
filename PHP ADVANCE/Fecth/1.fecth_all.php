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

$sql = "SELECT nama, status FROM data_rule ORDER BY nama";


$result = $conn->query($sql);


$n = $result->fetch_all(MYSQLI_ASSOC);

// $n = $result->free_result();

var_dump($n);
