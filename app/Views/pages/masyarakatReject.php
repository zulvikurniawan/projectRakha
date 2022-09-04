<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid m-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Keterangan Reject</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/Masyarakat/reject/<?= $masyarakat['id_masyarakat']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Input Keterangan" autofocus required value="<?= old('keterangan'); ?>" rows="3"></textarea>
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
        const fotoProfil = document.querySelector('#foto_ktp');
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