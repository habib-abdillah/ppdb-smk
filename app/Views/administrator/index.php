<?= $this->extend('components/dashboard') ?>
<?= $this->section('content') ?>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 mb-2">
    <div class="col">
        <a href="/admin/peserta/terdaftar" class="text-decoration-none">
            <div class="card bg-primary text-white m-2 shadow">
                <div class="card-body d-flex flex-row justify-content-between align-items-center">
                    <div class="col">
                        <p>Peserta Terdaftar</p>
                        <h4><?= $pendaftar->get()->getNumRows(); ?></h4>
                    </div>
                    <span class="fas fa-user fa-3x"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/admin/peserta/verifikasi" class="text-decoration-none">
            <div class="card text-white m-2 shadow" style="background-color:orange">
                <div class="card-body d-flex flex-row justify-content-between align-items-center">
                    <div class="col">
                        <p>Proses Pengecekan</p>
                        <h4><?= $pendaftar->getWhere(['status_pendaftaran'=>'verifikasi'])->getNumRows(); ?></h4>
                    </div>
                    <span class="fas fa-users fa-3x"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/admin/peserta/lolos" class="text-decoration-none">
            <div class="card bg-success text-white m-2 shadow">
                <div class="card-body d-flex flex-row justify-content-between align-items-center">
                    <div class="col">
                        <p>Peserta Lolos</p>
                        <h4><?= $pendaftar->getWhere(['status_pendaftaran'=>'lolos'])->getNumRows(); ?></h4>
                    </div>
                    <span class="fas fa-user-check fa-3x"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/admin/peserta/tidak_lolos" class="text-decoration-none">
            <div class="card bg-danger text-white m-2 shadow">
                <div class="card-body d-flex flex-row justify-content-between align-items-center">
                    <div class="col">
                        <p>Tidak Lolos</p>
                        <h4><?= $pendaftar->getWhere(['status_pendaftaran'=>'tidak_lolos'])->getNumRows(); ?></h4>
                    </div>
                    <span class="fas fa-user-slash fa-3x"></span>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12 col-xl-9 mb-2">
        <div class="card shadow">
            <div class="card-header">
                <h5>Data User Admin</h5>
            </div>
            <div class="card-body">
                <span class="card-text">Berikut adalah daftar user admin yang dapat mengakses halaman
                    admin</span>
                <div class="table-responsive">
                    <table class="table" id="tableData">
                        <thead>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Role</th>
                        </thead>
                        <tbody>
                            <?php
                                    $no = 0;
                                    foreach ($users as $user):?>
                            <tr>
                                <td><?= ++$no; ?></td>
                                <td><?= $user['nama_lengkap'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['role'] ?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-3 mb-2">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Profile Anda</h5>
                <p class="card-text flex-column">
                    Nama : <?= $session->account['name'] ?><br>
                    Email : <?= $session->account['email'] ?><br>
                    Role : <?= $session->account['role'] ?><br>
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>