<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Daftar Akun</h2>
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

                <a href="/admin/Add" class="btn btn-primary">Tambah Akun</a>
                <table id="tableAdmin" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($account as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $a['id_account']; ?></td>
                                <td><?= $a['nik']; ?></td>
                                <td><?= $a['nama']; ?></td>
                                <td class="text-center">
                                    <!-- tombol jika menggunakan modal -->
                                    <!-- <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailAccountModal">
                                    Detail
                                </button>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editAccountModal">
                                    Edit
                                </button> -->

                                    <!-- tombol tanpa modal -->
                                    <a href="/Admin/<?= $a['id_account']; ?>" class="btn btn-sm btn-success">Detail</a>
                                    <a href="/Admin/edit/<?= $a['id_account']; ?>" type="button" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="/Admin/delete/<?= $a['id_account']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</a>
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

//java skript
<?= $this->section('javascript'); ?>
<script>
    $(function() {
        $("#tableAdmin").DataTable({
            "searching": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "paging": true,
            "info": true,
            "ordering": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<?= $this->endSection(); ?>
// akhir java skript