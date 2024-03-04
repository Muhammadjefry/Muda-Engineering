<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-4 mb-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-12">
                                <div class="p-4 ps-5 pe-5 ">

                                    <div class="text-center mb-3 pt-0">
                                        <img src="../assets/bmt.png" alt="" width="60%">
                                    </div>

                                    <?php
                                    session_start();

                                    if (isset($_SESSION['pesan'])) { ?>

                                    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog"
                                        aria-labelledby="errorModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="errorModalLabel">Message
                                                        <?php echo ($_SESSION['pesan'] == 'Succesfully Register 😊') ? 'Success' : 'Error'; ?>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close" onclick="hapusSession()">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div
                                                    class="modal-body text-center <?php echo ($_SESSION['pesan'] == 'Succesfully Register 😊') ? 'text-success' : 'text-danger'; ?>">
                                                    <ul>
                                                        <h4><?php echo isset($_SESSION['pesan']) ? $_SESSION['pesan'] : ''; ?>
                                                            </h4>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-md btn-secondary"
                                                        data-dismiss="modal" onclick="hapusSession()">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    } else {
                                        echo "";
                                    };
                                    ?>


                                    <form action="../app/controller/Cek_register.php" method="post">

                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control " name="username"
                                                placeholder=" Username...">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control " name="fullname"
                                                placeholder="FullName...">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control " name="email"
                                                placeholder=" Email...">
                                        </div>

                                        <div class="form-group mb-3">
                                            <select class="form-control " name="gender"
                                                aria-label="Default select example">
                                                <option selected disabled>-- Gender ---</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <select class="form-control " name="rule"
                                                aria-label="Default select example">
                                                <option selected disabled>-- Role ---</option>
                                                <option value="2">Student 1</option>
                                                <option value="3">Student 2</option>
                                                <option value="4">Student 3</option>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-success mt-1 pe-3 ps-3">
                                            Submit
                                        </button>
                                    </form>

                                    <div class="mt-3 text-center">
                                        <span style="font-size: 13px;">Do you have an account ? <a
                                                href="../index.php">Login</a></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="copyright text-center my-auto mb-3">
                    <span>Copyright &copy; Muda Engineering <?= date('Y'); ?></span>
                </div>

            </div>
        </div>

    </div>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>



    <script>
    function hapusSession() {
        // Hapus sesi dengan JavaScript
        <?php unset($_SESSION['pesan']); ?>
    }

    $(document).ready(function() {
        $('#errorModal').modal('show');
    });
    </script>
</body>

</html>