<?php

class database
{
    public $sql;

    function __construct()
    {
        $conn = new mysqli('localhost', 'root', '', 'student_db');
        $this->sql = $conn;
    }

    function tampil_data()
    {
        $data = $this->sql->query("SELECT * FROM data_tb");

        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil ?? ' ';
    }

    function input($nama, $umur, $jenis_k)
    {
        $this->sql->query("INSERT INTO data_tb VALUES('','$nama','$umur','$jenis_k')");
    }


    function hapus($id)
    {
        $this->sql->query("DELETE FROM data_tb WHERE id='$id'");
    }


    function edit($id)
    {
        $data = $this->sql->query("SELECT * FROM data_tb WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nama, $umur, $jenis_k)

    {
        $this->sql->query("UPDATE data_tb SET nama='$nama', umur='$umur', jenis_k='$jenis_k' WHERE id='$id'");
    }
}