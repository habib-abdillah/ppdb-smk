<?= $this->extend('components/dashboard') ?>
<?= $this->section('content') ?>
<div class="row mb-2">
    <div class="col-md-12 col-xl-9 mb-2">
        <div class="card shadow mb-2 p-2">
            <div class="card-header">
                <?php
                switch ($pendaftar['status_pendaftaran']) {
                    case 'verifikasi_data':
                        $status['color'] = 'info';
                        $status['text'] = 'Verifikasi Data';
                        break;
                    case 'lolos':
                        $status['color'] = 'success';
                        $status['text'] = 'Lolos';
                        break;
                    case 'tidak_lolos':
                        $status['color'] = 'danger'; 
                        $status['text'] = 'Tidak Lolos'; 
                        break;
                    default:
                        $status['color'] = 'secondary';     
                        $status['text'] = 'Proses Pembayaran';     
                        break;
                }
                ?>
                <h5 class="card-title">Status pendaftaran <span
                        class="badge bg-<?= $status['color'] ?>"><?= $status['text'] ?></span></h5>
                <h6 class="card-subtitle mb-2 text-muted">Berikut adalah status pendaftaran terkini anda</h6>
            </div>
            <div class="card-body">
                <p class="card-text">Dimohon untuk segera mengupload bukti pembayaran untuk melanjutkan pendaftaran</p>
                <form action="" method="post" class="col-4 input-group">
                    <input type="file" name="bukti_pendaftaran" id="" class="form-control">
                    <button class="btn btn-primary">Upload</button>
                </form>
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