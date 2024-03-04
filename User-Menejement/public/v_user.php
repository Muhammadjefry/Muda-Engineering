<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css">


</head>

<body class="bg-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-lg-4 col-md-7 ">


                <a href="../app/controller/Logout.php" class="btn btn-warning shadow mt-5">

                    Logout

                </a>



                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-12">
                                <div class="p-5 text-center">
                                    <h3>Ini halaman User
                                        <?php echo isset($_SESSION['login']) && $_SESSION['login'] == 'user1_On' ? 1 : (isset($_SESSION['login']) && $_SESSION['login'] == 'user2_On' ? 2 : (isset($_SESSION['login']) && $_SESSION['login'] == 'user3_On' ? 3 : 'not found')); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Muda Engineering <?= date('Y'); ?></span>
                </div>

            </div>
        </div>

    </div>




    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>