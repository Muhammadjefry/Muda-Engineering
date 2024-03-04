<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container p-5">

        <!-- Add User -->
        <div class="col-xl-12 mb-3">
            <button type="button" class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa fa-user-plus mr-2"></i>Add Student
            </button>
        </div>

        <!-- Modal Add-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button type="button" class="btn tutup" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">

                        <form action="../app/Add.php" method="post">
                            <input type="hidden" id="id">
                            <div class="mb-3 row">
                                <!-- input Username -->
                                <label for="nama1" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama1" name="nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <!-- input Username -->
                                <label for="umur1" class="col-sm-2 col-form-label">Umur</label>
                                <div class="col-sm-10">

                                    <input type="text" class="form-control" id="umur1" name="umur">
                                </div>
                            </div>
                            <div class="mb-3 row ">
                                <label class="col-sm-4 form-label">Jenis Kelamin</label>
                                <select class="col-sm-6 form-control" name="jenis_k"
                                    aria-label="Default select example">
                                    <option selected disabled> --- Pilih Disini --- </option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary tutup"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
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
                            <?php
                            include "../app/koneksi.php";
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM data_tb");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['umur']; ?></td>
                                <td><?php echo $d['jenis_k']; ?></td>
                                <td>
                                    <a href="Edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success"> <i
                                            class="fa fa-user-edit mr-2"></i>Edit</a>
                                    <a href="Delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"> <i
                                            class="fa fa-trash mr-2"></i>Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>