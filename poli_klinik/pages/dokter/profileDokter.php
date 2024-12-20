<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-right text-bold">Profile Dokter</h1>
                
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                    <li class="breadcrumb-item active">Profile Dokter</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered text-nowrap">
                            <tbody>

                                <!-- TAMPILKAN DATA Poli DI SINI -->
                                <?php
                            require 'config/koneksi.php';
                            
                            $query = "SELECT dokter.id, dokter.nama, dokter.alamat, dokter.no_hp FROM dokter WHERE id = '$id_dokter'";
                            $result = mysqli_query($mysqli, $query);

                            while ($data = mysqli_fetch_assoc($result)) {
                                # code...  
                            ?>
                             <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td style="white-space: pre-line;"><?php echo htmlspecialchars($data['alamat']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <td><?php echo htmlspecialchars($data['no_hp']); ?></td>
                                    </tr>
                               
                                   
                            </tbody>
                             <div class="float-right" style="margin: 10px">
                                        <button 
                                    type='button' 
                                    class='btn btn-sm edit-btn text-white position-right' 
                                    style="background-color: #007BFF; padding: 0.5rem 1rem; border-radius: 8px;"
                                    data-toggle="modal"
                                    data-target="#editModal<?php echo htmlspecialchars($data['id']); ?>">
                                    <i class="fas fa-pencil-alt mr-1"></i>Edit Profile
                                </button>
                            <!-- Tombol Edit di bawah tabel -->

                                        
                                <tr>
                               
                                    <!-- Modal Edit Data poli -->
                                    <div class="modal fade" id="editModal<?php echo $data['id'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addModalLabel">Edit Data Poli</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form edit data poli disini -->
                                                    <form action="pages/dokter/updateProfileDokter.php" method="post">
                                                        <input type="hidden" class="form-control" id="id" name="id"
                                                            value="<?php echo $data['id'] ?>" required>
                                                        <div class="form-group">
                                                            <label for="nama">Nama Pesien</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama"
                                                                value="<?php echo $data['nama'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat" class=" d-block">Alamat</label>
                                                            <textarea class="form-control" rows="3" id="alamat"
                                                                name="alamat"><?php echo $data['alamat'] ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp" class=" d-block">Nomor Telepon</label>
                                                            <textarea class="form-control" rows="3" id="no_hp"
                                                                name="no_hp"><?php echo $data['no_hp'] ?></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                       
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->