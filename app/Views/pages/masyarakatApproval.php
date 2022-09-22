<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php $user = session()->get('user') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Daftar Data Masyarakat</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php if (session()->getFlashdata('tambahData')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('tambahData'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('ubahData')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('ubahData'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('hapusData')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('hapusData'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <table id="tableMasyarakat" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($masyarakatStatus as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>

                                <td><?= $m['nik']; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['status']; ?></td>
                                <td class="text-center">
                                    <!-- tombol jika menggunakan modal -->
                                    <!-- <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailAccountModal">
                                    Detail
                                </button>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editAccountModal">
                                    Edit
                                </button> -->

                                    <!-- tombol tanpa modal -->
                                    <a href="/Masyarakat/detailApproval/<?= $m['id_masyarakat']; ?>" class="btn btn-sm btn-warning">Detail</a>
                                    <a href="/Masyarakat/acc/<?= $m['id_masyarakat']; ?>" class="btn btn-sm btn-success">Approve</a>
                                    <a href="/Masyarakat/reject/<?= $m['id_masyarakat']; ?>" class="btn btn-sm btn-danger">Reject</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>
<script>
    $(function() {
        $("#tableMasyarakat").DataTable({
            "searching": true,
            "responsive": true,
            "lengthChange": false,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "autoWidth": false,
            "paging": true,
            "info": true,
            "ordering": true,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<?= $this->endSection(); ?>
<!-- akhir java skript -->