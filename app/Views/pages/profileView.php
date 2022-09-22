<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card m-3">
                        <div class="card-header">
                            <h2>Profile</h2>
                            <?php if (session()->getFlashdata('ubahData')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('ubahData'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid" src="/img/<?= $admin['foto_profil']; ?>" alt="foto_profil">
                                <h3 class="profile-username"><?= $admin['nama']; ?></h3>
                                <p class="text-muted"><?= $admin['nik']; ?></p>
                            </div>
                            <ul class="list-group list-group-unbordered mb-3 mx-auto" style="width: 90%;">
                                <li class="list-group-item">
                                    <b>Jabatan</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['nama_jabatan']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['jenis_kelamin']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Passwword</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['password']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Email</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['email']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Nomor Hp</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['nomor_hp']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Alamat</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['alamat']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>RT</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['rt']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>RW</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['rw']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Kelurahan / Desa</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['kelurahan_desa']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Kecamatan</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['kecamatan']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Kabupaten / Kota</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['kabupaten_kota']; ?></a>
                                </li>
                                <li class=" list-group-item">
                                    <b>Provinsi</b> <a class="float-right text-dark" style="text-decoration:none"><?= $admin['provinsi']; ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-end">
                            <a href="/Dashboard" class="btn btn-secondary mr-3">Back</a>
                            <a href="/Profile/edit/<?= $admin['id_account']; ?>" type="button" class="btn btn-primary">Edit</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
<!-- akhir java skript -->