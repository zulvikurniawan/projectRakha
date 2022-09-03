<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
  <!-- Main content -->
  <section class="content">
    <div class="card m-3">
      <div class="card-header">
        <h2>Dashboard</h2>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row justify-content-around">
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Laki - Laki Lansia</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-mars"></i>
              </div>
            </div>
          </div>
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-warning text-white">
              <div class="inner">
                <h4>Laki - Laki Dewasa</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-mars"></i>
              </div>
            </div>
          </div>
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Anak Laki - Laki</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-mars"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Perempuan Lansia</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-venus"></i>
              </div>
            </div>
          </div>
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-warning text-white">
              <div class="inner">
                <h4>Perempuan Dewasa</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-venus"></i>
              </div>
            </div>
          </div>
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Anak Perempuan</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-venus"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h4>Jumlah Penduduk</h4>
                <h4>44</h4>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
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

<?= $this->endSection(); ?>
<!-- akhir java skript -->