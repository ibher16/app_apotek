
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Data Setting</h4>
  <?php
  include('models/proses_referensi.php');
  ?>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Data Setting</h5>
  
                    <div class="card-body">
                        <div class="col-md-6">
                        
                        </div>
                    </div>

                       
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                            <th>No</th>
                            <th>Nama Aplikasi</th>
                            <th>Nama Footer</th>
                            <th>Foto Aplikasi</th>
                            <th>Aksi</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    //ambil data jam
                     $no=0;
                     $hasil=select("t_setting_aplikasi");
                     while($data=mysqli_fetch_array($hasil))
                     {
                         $no++;
                         $idp=$data['id_setting'];            
                    ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$data['nm_aplikasi'];?></td>
                        <td><?=$data['nm_footer'];?></td>
                        <td><img src="picture/<?=$data['foto_aplikasi'];?>" height="100" width="100" class="img-circle elevation-2" alt="User Image"></td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-pen" data-bs-toggle="modal" data-bs-target="#edit<?=$idp;?>"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-camera" data-bs-toggle="modal" data-bs-target="#editlogo<?=$idp;?>"></span>
                            </button>
                           
                        <!-- Modal -->
                        <div class="modal fade" id="edit<?=$idp;?>" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Edit Data</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" class="was-validated" enctype="multipart/form-data">
                                <label class="form-label">Nama Aplikasi</label>
                                <input type="text" name="nama" value="<?=$data['nm_aplikasi'];?>" class="form-control" required>
                                <br>
                                <labe  class="form-label"l>Nama Footer</label>
                                <input type="text" name="footer" value="<?=$data['nm_footer'];?>" class="form-control" required>
                                <br>
                               
                                <input type="hidden" name="idp" value="<?=$idp;?>">
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" name="editsetting" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                                        
                        <!-- Modal -->
                        <div class="modal fade" id="editlogo<?=$idp;?>" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Edit Logo</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" class="was-validated" enctype="multipart/form-data">
                                <label class="form-label">Logo Awal</label>
                                <img src="picture/<?=$data['foto_aplikasi'];?>" height="100" width="100" class="img-circle elevation-2" alt="User Image">
                                <br>
                                <label class="form-label">Logo Baru</label>
                                <input type="file" class="form-control" name="file" id="file">
                                <br>                   
                                <input type="hidden" name="idp" value="<?=$idp;?>">
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" name="editlogo" class="btn btn-primary">Save changes</button>
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