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
                <a href="/admin/Add" class="btn btn-primary">Tambah Akun</a>
                <table id="tableAdmin" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($account as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
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
                                    <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
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