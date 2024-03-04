<?php

$PageTitle = "Dasboard Admin";
include_once "../template/header.php"; ?>

<body>

    <div class="container p-5">

        <div class="col-12 justify-content-between d-flex mb-5">
            <button class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <i class="fa fa-user-plus mr-2"></i>Add User

            </button>


            <a href="../app/controller/Logout.php" class="btn btn-warning shadow">

                <i class="fa fa-sign-out-alt mr-2"></i>Logout

            </a>
        </div>



        <!-- Modal Add-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button type="button" class="btn tutup" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body p-5">

                        <form action="../app/controller/Proses.php?aksi=tambah" method="post">

                            <input type="hidden" id="id">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control " name="username" placeholder=" Username...">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control " name="fullname" placeholder="FullName...">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control " name="email" placeholder=" Email...">
                            </div>

                            <div class="form-group mb-3">
                                <select class="form-control " name="gender" aria-label="Default select example">
                                    <option selected disabled>-- Gender ---</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <select class="form-control " name="rule" aria-label="Default select example">
                                    <option selected disabled>-- Role ---</option>
                                    <option value="2">Student 1</option>
                                    <option value="3">Student 2</option>
                                    <option value="4">Student 3</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <select class="form-control " name="status" aria-label="Default select example">
                                    <option selected disabled>-- Status ---</option>
                                    <option value="0">Off</option>
                                    <option value="1">On</option>
                                    <option value="2">Banned</option>
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
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Waiting List</th>
                                <th>Option</th>
                            </tr>
                        </thead>

                        <tbody>


                            <?php

                            $no = 1;
                            include '../app/controller/Auth.php';
                            $db = new Auth();

                            $data = $db->tampil_data();
                            if (is_array($data) && !empty($data)) {
                                foreach ($data as $x) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo isset($x['username']) ? $x['username'] : ''; ?></td>
                                <!-- <td><php echo isset($x['password']) ? $x['password'] : ''; ?></td> -->
                                <td><?php echo isset($x['fullname']) ? $x['fullname'] : ''; ?></td>
                                <td><?php echo isset($x['gender']) ? $x['gender'] : ''; ?></td>
                                <td><?php echo isset($x['email']) ? $x['email'] : ''; ?></td>

                                <td>
                                    <form action="../app/controller/Auth.php">

                                        <select class="form-control " name="status" aria-label="Default select example">
                                            <option selected disabled>-- Option ---</option>
                                            <option><button type="submit" value="0">Off</button></option>
                                            <option><button type="submit" value="1">On</button></option>
                                            <option><button type="submit" value="2">Banned</button></option>
                                        </select>

                                    </form>
                                </td>
                                <td class="d-flex">
                                    <a href="v_edit.php?id=<?php echo isset($x['id']) ? $x['id'] : ''; ?>&aksi=edit"
                                        class="btn btn-success mr-2">
                                        <i class="fa fa-user-edit mr-2"></i>Edit
                                    </a>
                                    <a href="../app/controller/Proses.php?id=<?php echo isset($x['id']) ? $x['id'] : ''; ?>&aksi=hapus"
                                        class="btn btn-danger">
                                        <i class="fa fa-trash mr-2"></i>Hapus
                                    </a>
                                </td>
                            </tr>




                            <?php
                                }
                            } else {
                            }
                            ?>

                        </tbody>

                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <?php

    include_once "../template/footer.php"; ?>