<?php

class Database
{

    public $server = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "multi_user";
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);

            if ($this->conn->connect_errno) {
                throw new Exception("Failed to connect to the database. Error: " . $this->conn->connect_error);
            } else {
                return "Connection successful";
            }
        } catch (Exception $e) {
            die("Error: " . $e->getMessage() . ". Please check your database configuration and try again.");
        }
    }

    public function getConn()
    {
        return $this->conn;
    }
}
