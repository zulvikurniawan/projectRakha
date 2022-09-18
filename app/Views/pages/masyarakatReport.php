<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php $user = session()->get('user') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Report</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tableMasyarakat" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Status Perkawinan</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Kewarganegaraan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">RT</th>
                            <th scope="col">RW</th>
                            <th scope="col">Kelurahan / Desa</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kabupaten / kota</th>
                            <th scope="col">Provinsi</th>
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
                                <td><?= $m['tempat_lahir']; ?></td>
                                <td><?= $m['tanggal_lahir']; ?></td>
                                <td><?= $m['jenis_kelamin']; ?></td>
                                <td><?= $m['agama']; ?></td>
                                <td><?= $m['status_perkawinan']; ?></td>
                                <td><?= $m['pekerjaan']; ?></td>
                                <td><?= $m['kewarganegaraan']; ?></td>
                                <td><?= $m['alamat']; ?></td>
                                <td><?= $m['rt']; ?></td>
                                <td><?= $m['rw']; ?></td>
                                <td><?= $m['kelurahan_desa']; ?></td>
                                <td><?= $m['kecamatan']; ?></td>
                                <td><?= $m['kabupaten_kota']; ?></td>
                                <td><?= $m['provinsi']; ?></td>
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
            "responsive": false,
            "scrollX": true,
            //tambahan fitur tombol "colvis", "copy", "csv",
            "buttons": ["pdf", "print"],
            dom: "<'row'<'col-md-2'l><'col-md-6'B><'col-md-4'f>>" + "<'row'<'col-md-12'tr>>" + "<'row'<'col-md-5'i><'col-md-7'p>>"
        }).buttons().container().appendTo('#tableMasyarakat_wrapper .col-sm-4:eq(0)');
    });
</script>
<?= $this->endSection(); ?>
<!-- akhir java skript -->