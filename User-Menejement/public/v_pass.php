<?php

session_start();

if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'admin') {

    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Page Admin</title>
    
        <link href="../../OOP/Latihan/Tugas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <link href="../../OOP/Latihan/Tugas/css/sb-admin-2.min.css" rel="stylesheet">
    
    </head>
    <body class="bg-success">
    
        <div class="container">
    
            <div class="row justify-content-center">
    
                <div class="col-lg-4 col-md-7">
    
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="p-5">
                                        <div class="text-center mb-3 pt-0">
                                            Masukan Password !!!
                                        </div>
    
    
                                        <form action="../app/controller/Cek_pass.php" method="post">
    
                                            <div class="form-group mb-3">
                                                <input type="password" class="form-control form-control-user" name="password"
                                                    placeholder="Password.." id="pass">
                                            </div>
                                            <div class="form-group mb-1 d-flex">';
    echo '<input type="hidden" name="username" value="' . $_SESSION['login_status'] . '">';

    echo '<input type="checkbox" onclick="showpass()"><span class="ms-1" style="font-size:10px">Show Password</span>';

    echo '</div>
    
    <button type="submit" class="btn btn-success mt-1 pe-3 ps-3">
        Submit
    </button>
    
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Muda Engineering <?= date("Y"); ?></span>
</div>

</div>
</div>

</div>


<script src="../../OOP/Latihan/Tugas/vendor/jquery/jquery.min.js"></script>
<script src="../../OOP/Latihan/Tugas/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../../OOP/Latihan/Tugas/vendor/jquery/jquery.min.js"></script>
<script src="../../OOP/Latihan/Tugas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../OOP/Latihan/Tugas/vendor/jquery-easing/jquery.easing.min.js"></script>



<script>
function showpass() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</body>

</html>';
} elseif (
    isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'user1_On' ||
    isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'user2_On' || isset($_SESSION['login_status']) &&
    $_SESSION['login_status'] == 'user3_On'
) {

    echo '
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Page Admin</title>

    <link href="../../OOP/Latihan/Tugas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../OOP/Latihan/Tugas/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-success">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center mb-3 pt-0">
                                        Password
                                    </div>

                                    <form action="../app/controller/Cek_pass.php" method="post">

                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password.." id="pass">
                                        </div>
                                        <div class="form-group mb-1 d-flex">';
    echo '<input type="hidden" name="username"
                                                value="' . $_SESSION['login_user'] . '">';

    echo '<input type="checkbox" onclick="showpass()"><span class="ms-1"
                                                style="font-size:10px">Show Password</span>';

    echo '</div>

                                        <button type="submit" class="btn btn-success mt-1 pe-3 ps-3">
                                            Submit
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Muda Engineering <?= date("Y"); ?></span>
                </div>

            </div>
        </div>

    </div>


    <script src="../../OOP/Latihan/Tugas/vendor/jquery/jquery.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/vendor/jquery/jquery.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/vendor/jquery-easing/jquery.easing.min.js"></script>



    <script>
    function showpass() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>

</html>';
} elseif (isset($_SESSION['login_status']) == 'user2') {

    echo "Halaman login untuk user";
} elseif (isset($_SESSION['login_status']) == 'user3') {

    echo "Halaman login untuk user";
} else {

    echo "Halaman tidak ditemukan";
}
