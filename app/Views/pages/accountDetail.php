<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="my-3 text-center">Detail Account</h2>
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4 my-auto">
                        <img src="/img/<?= $admin['foto_profil']; ?>" class="img-fluid rounded-start" alt="foto_Profil">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <table class="table">
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
                                    <td></td>
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
                            <a href="/admin" class="btn btn-secondary">Back</a>
                            <button type="button" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript