<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Data Jenis Obat</h4>
  <?php

  include('models/proses_referensi.php');

  ?>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Data Jenis Obat</h5>

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
              <label class="form-label">Nama Jenis Obat</label>
              <input type="text" name="namaobat" class="form-control" required>
              <br>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" name="addjenisobat" class="btn btn-primary">Save changes</button>
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
            <th>Nama Jenis Obat</th>
            <th>Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php

          //ambil data jenis obat
          $no = 0;
          $hasil = select("r_jenis_obat");
          while ($data = mysqli_fetch_array($hasil)) {
            $no++;
            $idj = $data['id_jenis_obat'];

          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $data['nm_jenis_obat']; ?></td>
              <td>
                <button type="button" class="btn rounded-pill btn-icon btn-primary">
                  <span class="tf-icons bx bx-pen" data-bs-toggle="modal" data-bs-target="#edit<?= $idj; ?>"></span>
                </button>
                <button type="button" class="btn rounded-pill btn-icon btn-danger">
                  <span class="tf-icons bx bx-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $idj; ?>"></span>
                </button>

                <!-- Modal edit-->
                <div class="modal fade" id="edit<?= $idj; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Jenis Obat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form method="post" class="was-validated">
                          <!-- <label class="form-label">Kode Jenis Obat</label>
                          <input type="text" name="kode" class="form-control" value="" required>
                          <br> -->
                          <label class="form-label">Nama Jenis Obat</label>
                          <input type="text" name="jenisobat" class="form-control" value="<?= $data['nm_jenis_obat']; ?>" required>
                          <br>

                          <input type="hidden" name="idj" value="<?= $data['id_jenis_obat']; ?>">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="submit" name="editjenisobat" class="btn btn-primary">Save changes</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>


                <!-- Modal hapus-->
                <div class="modal fade" id="delete<?= $idj; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Hapus Data Jenis Obat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form method="post" class="was-validated">
                          Apakah anda yakin ingin menghapus data ? <?= $data['nm_jenis_obat']; ?>
                          <input type="hidden" name="idj" value="<?= $data['id_jenis_obat']; ?>">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <button type="submit" name="hapusjenisobat" class="btn btn-danger">Delete</button>
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