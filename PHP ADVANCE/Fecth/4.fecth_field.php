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


if ($result = $conn->query($sql)) {
    while ($n = $result->fetch_field()) {
        echo "Column Name " . $n->name . PHP_EOL;
    }
    echo $n;
};





// var_dump($n);