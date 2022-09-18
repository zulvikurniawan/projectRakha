<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Detail Akun</h2>
            </div>
            <!-- /.card-header -->

            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="/img/<?= $admin['foto_profil']; ?>" alt="foto_profil">
                    <h3 class="profile-username"><?= $admin['nama']; ?></h3>
                    <p class="text-muted"><?= $admin['nik']; ?></p>
                </div>
                <ul class="list-group list-group-unbordered mb-3 mx-auto" style="width: 50%;">
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
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-end">
                <a href="/AdminStaff" class="btn btn-secondary mr-3">Back</a>

            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
<!-- akhir java skript -->