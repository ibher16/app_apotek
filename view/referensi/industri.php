<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Data Industri Farmasi Obat</h4>
    <?php

    include('models/proses_referensi.php');

    ?>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Data Industri Farmasi</h5>

        <div class="card-body">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                    <span class="tf-icons bx bx-plus"></span>
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" class="was-validated">

                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Industri</label>
                                <div class="col-sm-10">
                                    <input type="text" name="industri" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No Telp.</label>
                                <div class="col-sm-10">
                                    <input type="text" name="notlp" class="form-control" required>
                                </div>
                            </div>


                            <br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" name="addindustri" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr class="text-nowrap">
                        <th>No</th>
                        <th>Industri Farmasi</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    //ambil data jenis obat
                    $no = 0;
                    $hasil = select("r_industri_farmasi");
                    while ($data = mysqli_fetch_array($hasil)) {
                        $no++;
                        $id_inf = $data['id_industri_farmasi'];

                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['nm_industri']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['no_tlp']; ?></td>
                            <td>
                                <button type="button" class="btn rounded-pill btn-icon btn-primary">
                                    <span class="tf-icons bx bx-pen" data-bs-toggle="modal" data-bs-target="#edit<?= $id_inf; ?>"></span>
                                </button>
                                <button type="button" class="btn rounded-pill btn-icon btn-danger">
                                    <span class="tf-icons bx bx-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $id_inf; ?>"></span>
                                </button>

                                <!-- Modal edit-->
                                <div class="modal fade" id="edit<?= $id_inf; ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Edit Satuan Obat</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" class="was-validated">
                                                    <!-- <label class="form-label">Kode Jenis Obat</label>
                          <input type="text" name="kode" class="form-control" value="" required>
                          <br> -->
                                                    <label class="form-label">Nama Satuan Obat</label>
                                                    <input type="text" name="satuanobat" class="form-control" value="<?= $data['nm_industri']; ?>" required>
                                                    <br>

                                                    <input type="hidden" name="id_inf" value="<?= $data['id_industri_farmasi']; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="editsatuan" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal hapus-->
                                <div class="modal fade" id="delete<?= $id_inf; ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Hapus Data Jenis Obat</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" class="was-validated">
                                                    Apakah anda yakin ingin menghapus data ? <?= $data['nm_industri']; ?>
                                                    <input type="hidden" name="id_inf" value="<?= $data['id_industri_farmasi']; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="hapussatuan" class="btn btn-danger">Delete</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php

                    }

                    ?>
                </tbody>
            </table>

            <div class="content-backdrop fade"></div>
        </div>
        <!-- / Content -->
    </div>
</div>