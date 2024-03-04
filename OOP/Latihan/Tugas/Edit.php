<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container p-5">

        <!-- Add User -->
        <div class="col-lg-12 mb-3 text-center">
            <h3>Edit Student</h3>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">


                        <div class="col-md-12">
                            <?php
                            include "../app/koneksi.php";
                            $id = $_GET['id'];
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM data_tb WHERE id='$id'");
                            while ($d = mysqli_fetch_array($data)) { ?>
                                <form action="../app/Edit.php" method="post">
                                    <input class="form-control mb-3" type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                    <input class="form-control mb-3" type="text" name="nama" value="<?php echo $d['nama']; ?>">
                                    <input class="form-control mb-3" type="text" name="umur" value="<?php echo $d['umur']; ?>">
                                    <input class="form-control mb-3" type="text" name="jenis_k" value="<?php echo $d['jenis_k']; ?>">

                                <?php } ?>
                                <div class="col-12 text-right">

                                    <button type=" submit" class="btn btn-success mt-3">Save Change</button>
                                </div>
                                </form>
                        </div>

                </div>
            </div>
        </div>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>