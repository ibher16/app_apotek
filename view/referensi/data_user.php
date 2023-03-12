
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Data User</h4>
  <?php
  include('models/proses_referensi.php');
  ?>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Data User</h5>
  
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
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" class="was-validated" enctype="multipart/form-data">
                                <label>Nama User</label>
                                <input type="text" name="nama" class="form-control" required>
                                <br>
                                <label>Username</label>
                                <input type="email" name="username" class="form-control" required>
                                <br>
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                                <br>
                                <label>Status</label>
                                <select name="status" class="form-control" >
                                  <option value="3">Administrator</option>
                                  <option value="1">Fordev</option>
                                  <option value="2">Andev</option>
                                </select>
                                <br>
                               
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" name="adduser" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>


                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    //ambil data jam
                     $no=0;
                     $hasil=select("t_user");
                     while($data=mysqli_fetch_array($hasil))
                     {
                         $no++;
                         $idp=$data['id_user'];           
                    ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$data['nama'];?></td>
                        <td><?=$data['user_name'];?></td>
                        <td><?=statususer($data['level']);?></td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-pen" data-bs-toggle="modal" data-bs-target="#edit<?=$idp;?>"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-warning">
                              <span class="tf-icons bx bx-key" data-bs-toggle="modal" data-bs-target="#editpass<?=$idp;?>"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-danger">
                              <span class="tf-icons bx bx-trash" data-bs-toggle="modal" data-bs-target="#delete<?=$idp;?>"></span>
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
                                <form method="post" class="was-validated">
                                <label>Nama User</label>
                                <input type="text" name="nama" class="form-control" value="<?=$data['nama'];?>"  required>
                                <br>
                                <label>Username</label>
                                <input type="email" name="username" class="form-control" value="<?=$data['user_name'];?>"  required>
                                <br>
                                <label>status</label>
                                <select name="status" class="form-control" >
                                  <option value="1" <?php if($data['level']==1){?>selected=""<?php } ?>>Administrator</option>
															    <option value="2" <?php if($data['level']==2){?>selected="" <?php } ?>>Operator</option>
                                </select>
                                <br>
                                <input type="hidden" name="idp" value="<?=$idp;?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" name="edituser" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                                        
                        <!-- Modal -->
                        <div class="modal fade" id="editpass<?=$idp;?>" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Edit Password</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" class="was-validated">
                                <label>Password Baru</label>
                                <input type="password" name="password1" class="form-control"  required>
                                <br>
                                <label>Ulangi Password Baru</label>
                                <input type="password" name="password2" class="form-control" required>
                                                    
                                <input type="hidden" name="idp" value="<?=$idp;?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" name="editpass" class="btn btn-warning">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                                        
                         <!-- Modal -->
                         <div class="modal fade" id="delete<?=$idp;?>" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" class="was-validated">
                                Apakah anda yakin ingin menghapus data <?=$data['nama'];?>?
                                <input type="hidden" name="idp" value="<?=$idp;?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" name="hapususer" class="btn btn-danger">Delete</button>
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