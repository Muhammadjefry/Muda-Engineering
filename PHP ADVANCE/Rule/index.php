<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../OOP/Latihan/Tugas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="../OOP/Latihan/Tugas/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../OOP/Latihan/Tugas/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container p-5">


        <!-- 
        <button class="btn btn-primary shadow mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">

            <i class="fa fa-user-plus mr-2"></i>Add Student

        </button> -->


        <!-- Modal Add-->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button type="button" class="btn tutup" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">

                        <form action="app/proses.php?aksi=tambah" method="post">

                            <input type="hidden" id="id">
                            <div class="mb-3 row">
                                <label for="nama1" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama1" name="nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
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
                                <button type="submit" class="btn btn-primary" value="Simpan">Save</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div> -->



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
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>


                            <?php

                            $no = 1;
                            include 'database.php';
                            $db = new database();

                            $data = $db->tampil_data();

                            foreach ($data as $x) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo isset($x['nama']) ? $x['nama'] : ''; ?></td>
                                <td><?php echo isset($x['status']) ? $x['status'] : ''; ?></td>
                            </tr>
                            <?php

                            }
                            ?>

                        </tbody>

                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <script src="../OOP/Latihan/Tugas/vendor/jquery/jquery.min.js"></script>
    <script src="../OOP/Latihan/Tugas/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../OOP/Latihan/Tugas/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../OOP/Latihan/Tugas/js/demo/datatables-demo.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>