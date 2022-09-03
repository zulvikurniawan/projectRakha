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
                    <img class="profile-user-img img-fluid" src="/img/<?= $masyarakat['foto_ktp']; ?>" alt="foto_ktp">
                    <h3 class="profile-username"><?= $masyarakat['nama']; ?></h3>
                    <p class="text-muted"><?= $masyarakat['nik']; ?></p>
                </div>
                <ul class="list-group list-group-unbordered mb-3 mx-auto" style="width: 50%;">
                    <li class="list-group-item">
                        <b>Tempat Lahir</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['tempat_lahir']; ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Tanggal Lahir</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['tanggal_lahir']; ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Jenis Kelamin</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['jenis_kelamin']; ?></a>
                    </li>
                    <li class=" list-group-item">
                        <b>Agama</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['agama']; ?></a>
                    </li>
                    <li class=" list-group-item">
                        <b>Status Perkawinan</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['status_perkawinan']; ?></a>
                    </li>
                    <li class=" list-group-item">
                        <b>Pekerjaan</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['pekerjaan']; ?></a>
                    </li>
                    <li class=" list-group-item">
                        <b>Kewarganegaraan</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['kewarganegaraan']; ?></a>
                    </li>
                    <li class=" list-group-item">
                        <b>Alamat</b> <a class="float-right text-dark" style="text-decoration:none"><?= $masyarakat['alamat']; ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-end">
                <a href="/Masyarakat" class="btn btn-secondary mr-3">Back</a>

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