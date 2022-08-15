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
        <div class="row justify-content-between">
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>44</h3>
                <p>Laki-laki Lansia</p>
              </div>
              <div class="icon">
                <i class="fas fa-mars"></i>
              </div>
            </div>
          </div>
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>44</h3>
                <p>Laki-laki Dewasa</p>
              </div>
              <div class="icon">
                <i class="fas fa-mars"></i>
              </div>
            </div>
          </div>
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>44</h3>
                <p>Anak Laki-laki</p>
              </div>
              <div class="icon">
                <i class="fas fa-mars"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>44</h3>
                <p>Perempuan Lansia</p>
              </div>
              <div class="icon">
                <i class="fas fa-venus"></i>
              </div>
            </div>
          </div>
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>44</h3>
                <p>Perempuan Dewasa</p>
              </div>
              <div class="icon">
                <i class="fas fa-venus"></i>
              </div>
            </div>
          </div>
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>44</h3>
                <p>Anak Perempuan</p>
              </div>
              <div class="icon">
                <i class="fas fa-venus"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-3">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>44</h3>
                <p>Jumlah Penduduk</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
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

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript