<?php

class Auth
{
    public $conn;

    public function __construct()
    {
        include '/xampp/htdocs/Muda-Engineering/User-Menejement/app/config/Database.php';
        $db = new Database();
        $this->conn = $db->getConn();
    }
    public function checkLogin($username)
    {
        if ($this->conn) {
            $hasil = $this->conn->query("SELECT * FROM login WHERE username='$username'");
            if ($hasil->num_rows > 0) {
                $row = $hasil->fetch_assoc();
                if ($row['rule'] == 1) {
                    return 'admin';
                } else if ($row['rule'] == 2 && $row['status'] == 0) {
                    return 'user1_Off';
                } else if ($row['rule'] == 2 && $row['status'] == 1) {
                    return 'user1_On';
                } else if ($row['rule'] == 2 && $row['status'] == 2) {
                    return 'user1_Banned';
                } else if ($row['rule'] == 3 && $row['status'] == 0) {
                    return 'user2_Off';
                } else if ($row['rule'] == 3 && $row['status'] == 1) {
                    return 'user2_On';
                } else if ($row['rule'] == 3 && $row['status'] == 2) {
                    return 'user2_Banned';
                } else if ($row['rule'] == 4 && $row['status'] == 0) {
                    return 'user3_Off';
                } else if ($row['rule'] == 4 && $row['status'] == 1) {
                    return 'user3_On';
                } else if ($row['rule'] == 4 && $row['status'] == 2) {
                    return 'user3_Banned';
                }
            } else {
                return 'not_found';
            }
        } else {
            // Tangani kesalahan jika koneksi tidak tersedia
            return 'connection_not_available';
        }
    }

    public function checkPass($username, $password)
    {
        // Ambil data dari database
        $hasil = $this->conn->query("SELECT * FROM login WHERE username='$username'");

        if ($hasil->num_rows > 0) {
            $row = $hasil->fetch_assoc();
            $dbPassword = $row['password'];

            if (empty($dbPassword)) {
                $update = $this->conn->query("UPDATE login SET password='$password' WHERE username='$username'");
                if ($update) {
                    $hasil = $this->conn->query("SELECT * FROM login WHERE username='$username'");
                    if ($hasil->num_rows > 0) {
                        $row = $hasil->fetch_assoc();
                        if ($row['rule'] == 1) {
                            return 'admin';
                        } else if ($row['rule'] == 2 && $row['status'] == 1) {
                            return 'user1_On';
                        } else if ($row['rule'] ==  3 && $row['status'] == 1) {
                            return 'user2_On';
                        } else if ($row['rule'] ==  4 && $row['status'] == 1) {
                            return 'user3_On';
                        } else if ($row['rule'] == 2 && $row['status'] == 0) {
                            return 'user1_Off';
                        } else if ($row['rule'] ==  3 && $row['status'] == 0) {
                            return 'user2_Off';
                        } else if ($row['rule'] ==  4 && $row['status'] == 0) {
                            return 'user3_Off';
                        } else if ($row['rule'] == 2 && $row['status'] == 2) {
                            return 'user1_Banned';
                        } else if ($row['rule'] ==  3 && $row['status'] == 2) {
                            return 'user2_Banned';
                        } else if ($row['rule'] ==  4 && $row['status'] == 2) {
                            return 'user3_Banned';
                        }
                    } else {
                        return 'not_found';
                    }
                } else {
                    // Jika UPDATE gagal, kembalikan pesan kesalahan
                    return 'update_failed';
                }
            } else {
                $hasil = $this->conn->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
                if ($hasil->num_rows > 0) {
                    $row = $hasil->fetch_assoc();
                    if ($row['rule'] == 1) {
                        return 'admin';
                    } else if ($row['rule'] == 2 && $row['status'] == 1) {
                        return 'user1_On';
                    } else if ($row['rule'] ==  3 && $row['status'] == 1) {
                        return 'user2_On';
                    } else if ($row['rule'] ==  4 && $row['status'] == 1) {
                        return 'user3_On';
                    } else if ($row['rule'] == 2 && $row['status'] == 0) {
                        return 'user1_Off';
                    } else if ($row['rule'] ==  3 && $row['status'] == 0) {
                        return 'user2_Off';
                    } else if ($row['rule'] ==  4 && $row['status'] == 0) {
                        return 'user3_Off';
                    } else if ($row['rule'] == 2 && $row['status'] == 2) {
                        return 'user1_Banned';
                    } else if ($row['rule'] ==  3 && $row['status'] == 2) {
                        return 'user2_Banned';
                    } else if ($row['rule'] ==  4 && $row['status'] == 2) {
                        return 'user3_Banned';
                    }
                } else {
                    return 'not_found';
                }
            }
        } else {
            return 'not_found';
        }
    }

    public function checkRegister($username, $fullname, $gender, $rule, $email)
    {
        // Periksa apakah pengguna sudah terdaftar
        $hasil = $this->conn->query("SELECT * FROM login WHERE username='$username'");

        if ($hasil->num_rows > 0) {
            return 'data_Ada';
        } else {
            $this->conn->query("INSERT INTO login (username, fullname, gender, rule, email) VALUES ('$username', '$fullname', '$gender', $rule, '$email')");

            return 'data_TidakAda';
        }
    }

    public function tampil_data()
    {
        $data = $this->conn->query("SELECT * FROM login WHERE NOT rule=1");

        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil ?? ' ';
    }


    function input($username, $fullname, $gender, $email, $rule, $status)
    {
        $this->conn->query("INSERT INTO login(username, fullname, gender, email, rule, status) VALUES('$username','$fullname','$gender','$email', $rule, $status)");
    }


    function hapus($id)
    {
        $this->conn->query("DELETE FROM login WHERE id='$id'");
    }


    function edit($id)
    {
        $data = $this->conn->query("SELECT * FROM login WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $username, $fullname, $gender, $email)

    {
        $this->conn->query("UPDATE login SET username='$username', fullname='$fullname', gender='$gender',email='$email' WHERE id='$id'");
    }
}
