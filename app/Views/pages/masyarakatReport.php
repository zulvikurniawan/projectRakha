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
                <table id="tableMasyarakat" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($masyarakat as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>

                                <td><?= $m['nik']; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['status']; ?></td>
                                <td><?= $m['keterangan']; ?></td>
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
    $(document).ready(function() {
        $("#tableMasyarakat").DataTable({
            "lengthChange": true,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "autoWidth": false,
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "responsive": true,
            "scrollX": true,
            //tambahan fitur tombol "colvis", "copy", "csv",
            "buttons": ["excel", "pdf", "print"],
            dom: "<'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>>" + "<'row'<'col-md-12'tr>>" + "<'row'<'col-md-5'i><'col-md-7'p>>"
        }).buttons().container().appendTo('#tableMasyarakat_wrapper .col-sm-4:eq(0)');
    });
</script>
<?= $this->endSection(); ?>
<!-- akhir java skript -->