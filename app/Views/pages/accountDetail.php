<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Detail Account</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-3 m-auto">
                        <!-- small card -->
                        <div class="small-box bg-white p-5">
                            <div class="inner">
                                <div class="icon m-auto">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <table class="table table-borderless">
                            <tr class="fs-5 fw-bold">
                                <td>Nama</td>
                                <td>: </td>
                                <td><?= $admin['nama']; ?></td>
                            </tr>
                            <tr class="fs-5 fw-bold">
                                <td>ID</td>
                                <td>: </td>
                                <td><?= $admin['nik']; ?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>: </td>
                                <td><?= $admin['nama_jabatan']; ?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>: </td>
                                <td><?= $admin['password']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: </td>
                                <td><?= $admin['email']; ?></td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td>: </td>
                                <td>0<?= $admin['nomor_hp']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-end">
                <a href="/admin" class="btn btn-secondary mr-3">Back</a>

            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript