
<?php
include '../config/koneksi.php';
 $id = $_GET['id'];
                            $sql = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
                            $data = mysqli_fetch_array($sql);
                                # code...
                            
                            ?>
                          <form action="../proses.php?i=updateuser" enctype="multipart/form-data" method="POST">
                            <div class="modal-body">
                                 <div class="col-md-4">
                                 <div class="form-group ">
                                    <label class="form-label">Nama</label>
                                            <div class="form-line">
                                                <input type="text" value="<?php echo $data['nama_user'] ?>" name="nama" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                               <div class="form-group ">
                                <label class="form-label">Username</label>
                                            <div class="form-line">
                                                <input type="text" value="<?php echo $data['username'] ?>" name="username" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group ">
                                    <label class="form-label">Password</label>
                                            <div class="form-line">
                                                <input type="password" id="pass" value="<?php echo $data['password'] ?>" name="password" class="form-control" required>
                                            </div>
                                            <input type="checkbox" id="md_checkbox_1" class="chk-col-red" onclick="myFunction()">
                                         <label for="md_checkbox_1">Lihat Password</label>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                     <label class="form-label">Email</label>
                                            <div class="form-line">
                                                <input type="text" value="<?php echo $data['email'] ?>" name="email" value="<?php echo $data['email'] ?>" class="form-control" required>
                                               <input type="text" value="<?php echo $id ?>" name="id_user" value="<?php echo $id ?>" class="form-control" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Level User</b>
                                    </p>
                                    <select name="level" class="form-control show-tick" required>
                                        <option value="<?php echo $data['status_user']?>">
                                            <?php
                                            if ($data['status_user'] == '0') {
                                                echo "user";
                                            } else {
                                                echo "admin";
                                            }
                                            ?>
                                        </option>
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>

                                </div>
                            </div>
                               
                         <div class="modal-footer">
                                   <button type="submit" name="tambah" class="btn btn-primary waves-effect">Update</button>
                                <button type="reset" class="btn btn-warning  waves-effect">Reset</button>
                                 </form>
                                </div>