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
                        <form action="/Admin/update/<?= $admin['id_account']; ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIP</label>
                                    <!-- <input type="text" class="form-control" id="nipLama" name="nipLama" placeholder="Input NIP" value="<?= $admin['nik']; ?>" hidden> -->
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Input NIP" value="<?= $admin['nik']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Input Password" value="<?= $admin['password']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Input Nama Lengkap" autofocus value="<?= $admin['nama']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select id="id_jabatan" name="id_jabatan" class="custom-select form-control <?= ($validation->hasError('id_jabatan')) ? 'is-invalid' : ''; ?>">
                                        <option value="<?= $admin['id_jabatan']; ?>" selected hidden><?= $admin['nama_jabatan']; ?></option>
                                        <?php foreach ($jabatan as $j) : ?>
                                            <option value="<?= $j['id_jabatan']; ?>"><?= $j['nama_jabatan']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('id_jabatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="" disabled hidden checked <?= (old('jenis_kelamin') == '' || $admin['jenis_kelamin'] == '') ? 'checked' : ''; ?>>
                                    <div class="form-check">
                                        <input class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" <?= (old('jenis_kelamin') == 'Laki-laki' || $admin['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?= (old('jenis_kelamin') == 'Perempuan' || $admin['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Perempuan
                                        </label>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jenis_kelamin'); ?>
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
                                    <label for="nomor_hp">Nomor Handphone</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nomor_hp')) ? 'is-invalid' : ''; ?>" id="nomor_hp" name="nomor_hp" placeholder="Input Nomor Hp" value="<?= $admin['nomor_hp']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nomor_hp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="foto_profil">Foto Profil</label>
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="foto_profil_lama" id="foto_profil_lama" value="<?= $admin['foto_profil']; ?>">
                                        <input type="file" class="form-control <?= ($validation->hasError('foto_profil')) ? 'is-invalid' : ''; ?>" id="foto_profil" name="foto_profil">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_profil'); ?>
                                        </div>
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

<!-- java skript -->
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
<!-- akhir java skript -->