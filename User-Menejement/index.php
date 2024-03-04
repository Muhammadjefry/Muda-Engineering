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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center mb-3 pt-0">
                                        <img src="assets/bmt.png" alt="" width="100%">
                                    </div>

                                    <?php
                                    session_start();

                                    if (isset($_SESSION['message'])) { ?>

                                        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="errorModalLabel">Message !!!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hapusSession()">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body  text-danger">
                                                        <ul>
                                                            <h4><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?>
                                                            </h4>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal" onclick="hapusSession()">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } else {
                                        echo "";
                                    };
                                    ?>

                                    <form action="app/controller/Cek_login.php" method="post">

                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder=" Username">
                                        </div>

                                        <button type="submit" class="btn btn-success mt-1 pe-3 ps-3">
                                            Login
                                        </button>

                                    </form>

                                    <div class="form-group mt-3 text-center">
                                        <span style="font-size: 13px;">Do you not have an account ? <a href="public/v_register.php">Register</a></span>
                                    </div>
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


    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script>
        function hapusSession() {
            // Hapus sesi dengan JavaScriptS
            <?php unset($_SESSION['message']); ?>
        }

        $(document).ready(function() {
            $('#errorModal').modal('show');
        });
    </script>
</body>

</html>