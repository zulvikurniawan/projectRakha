<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund" style="margin-bottom: 50px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid m-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Akun RT</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/Admin/save" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Input NIK" autofocus value="<?= old('nik'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nik'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Input Password" value="<?= old('password'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Input Nama Lengkap" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="" disabled hidden checked <?= (old('jenis_kelamin') == '') ? 'checked' : ''; ?>>
                                    <div class="form-check">
                                        <input class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" <?= (old('jenis_kelamin') == 'Laki-laki') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input  <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?= (old('jenis_kelamin') == 'Perempuan') ? 'checked' : ''; ?>>
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
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Input email" value="<?= old('email'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">Nomor_hp</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nomor_hp')) ? 'is-invalid' : ''; ?>" id="nomor_hp" name="nomor_hp" placeholder="Input Nomor Hp" value="<?= old('nomor_hp'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nomor_hp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" placeholder="Input Alamat" value="<?= old('alamat'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rt">RT</label>
                                    <input type="number" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" id="rt" name="rt" placeholder="Input RT" value="<?= old('rt'); ?>" style="max-width: 120px;">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('rt'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rw">RW</label>
                                    <input type="number" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" id="rw" name="rw" placeholder="Input RW" value="<?= old('rw'); ?>" style="max-width: 120px;">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('rw'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kelurahanDesa">Kelurahan / Desa</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('kelurahanDesa')) ? 'is-invalid' : ''; ?>" id="kelurahanDesa" name="kelurahanDesa" placeholder="Input Kelurahan / Desa" value="<?= old('kelurahanDesa'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kelurahanDesa'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="Paku Haji" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="kabupatenKota">Kabupaten / Kota</label>
                                    <input type="text" class="form-control" id="kabupatenKota" name="kabupatenKota" value="Kabupaten Tangerang" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="Banten" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="foto_profil">Foto Profil</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control <?= ($validation->hasError('foto_profil')) ? 'is-invalid' : ''; ?>" id="foto_profil" name="foto_profil">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_profil'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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
<!-- //membuat img preview pada inputann  -->
<!-- <script>
    function previewImg() {
        // mengambil inputan foto profil
        const fotoProfil = document.querySelector('#foto_profil');
        const imgPreview = document.querySelector('.img-preview');

        // menggati privew img
        const fileFotoProfile = new FileReader();
        fileFotoProfile.readAsDataURL(fotoProfil);

        // simpan gambar ke dalam privew imgg
        fileFotoProfile.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script> -->
<?= $this->endSection(); ?>
<!-- akhir java skript -->