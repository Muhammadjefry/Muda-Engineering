<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../OOP/Latihan/Tugas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="../../OOP/Latihan/Tugas/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../OOP/Latihan/Tugas/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="app/proses.php?aksi=update" method="post">
                                    <?php
                                    include 'app/database.php';
                                    $db = new database();
                                    $no = 1;
                                    $id = $_GET['id'];
                                    foreach ($db->edit($id) as $d) { ?>
                                    
                                    <input class="form-control mb-3" type="hidden" name="id"
                                        value="<?php echo $d['id']; ?>">

                                    <td><?php echo $no++; ?></td>

                                    <td><input class="form-control mb-3" type="text" name="nama"
                                            value="<?php echo $d['nama']; ?>"></td>

                                    <td><input class="form-control mb-3" type="text" name="umur"
                                            value="<?php echo $d['umur']; ?>"></td>

                                    <td><input class="form-control mb-3" type="text" name="jenis_k"
                                            value="<?php echo $d['jenis_k']; ?>"></td>

                                    <?php } ?>

                                    <td>
                                        <button type=" submit" class="btn btn-success"><i
                                                class="fa fa-save mr-2"></i>Save Change</button>
                                    </td>
                                </form>

                            </tr>

                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>


    </div>


    <script src="../../OOP/Latihan/Tugas/vendor/jquery/jquery.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../../OOP/Latihan/Tugas/js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>