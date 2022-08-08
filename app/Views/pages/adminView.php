<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container bg-light mt-3">
    <div class="row mx-2">
        <div class="col">
            <h1 class="mt-2">
                Daftar Account
            </h1>
            <hr>

            <!-- tombol jika menggunakan modal -->
            <!-- <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addAccountModal">
                Add Account</button> -->

            <a href="/admin/Add" class="btn btn-info">Add Account</a>

            <table class="table tableAdmin mt-2">
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
                                <a href="/Admin/<?= $a['nama']; ?>" class="btn btn-sm btn-success">Detail</a>
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="/Admin/Delete" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Modal add account -->
<!-- <div class="modal fade" id="addAccountModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addAccount" name="addAccount">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nik" class="form-label">ID</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Input ID">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Input Password">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="l">
                            <label class="form-check-label" for="jenisKelamin">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="p">
                            <label class="form-check-label" for="jenisKelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Input Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Input Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Input Email">
                    </div>
                    <div class="mb-3">
                        <label for="nomorHp" class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control" id="nomorHp" name="nomorHp" placeholder="Input nomor Hp">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalBergabung" class="form-label">Tanggal Bergabung</label>
                        <input type="date" class="form-control" id="tanggalBergabung" name="tanggalBergabung" placeholder="Input Tanggal Bergabung">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="submit" class="btn btn-primary">Save</a>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- akhir modal add account -->

<!-- Modal detail account -->
<!-- <div class="modal fade" id="detailAccountModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addAccount" name="addAccount">
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- akhir modal detail account -->


<!-- Modal edit account -->
<!-- <div class="modal fade" id="editAccountModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edirAccountModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edirAccountModal">Edit Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editAccount" name="editAccount">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nik" class="form-label">ID</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Input ID">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Input Password">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="l">
                            <label class="form-check-label" for="jenisKelamin">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="p">
                            <label class="form-check-label" for="jenisKelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Input Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Input Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Input Email">
                    </div>
                    <div class="mb-3">
                        <label for="nomorHp" class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control" id="nomorHp" name="nomorHp" placeholder="Input nomor Hp">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalBergabung" class="form-label">Tanggal Bergabung</label>
                        <input type="date" class="form-control" id="tanggalBergabung" name="tanggalBergabung" placeholder="Input Tanggal Bergabung">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="submit" class="btn btn-primary">Update</a>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- akhir modal add account -->
<?= $this->endSection(); ?>

//java skript
<?= $this->section('javascript'); ?>

<?= $this->endSection(); ?>
// akhir java skript