<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid m-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Akun</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/update/<?= $admin['id_account']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Input NIK" value="<?= $admin['nik']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Input Nama Lengkap" autofocus value="<?= $admin['nama']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Input Password" value="<?= $admin['password']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Input email" value="<?= $admin['email']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">nomor_hp</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nomor_hp')) ? 'is-invalid' : ''; ?>" id="nomor_hp" name="nomor_hp" placeholder="Input Nomor Hp" value="<?= $admin['nomor_hp']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nomor_hp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto_profil">Foto Profil</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile022">
                                        <label class="input-group-text fw-bold">Upload</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-end mr-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="/Admin" type="button" class="btn btn-secondary ml-2">Back</a>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->


<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript