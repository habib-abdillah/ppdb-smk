<?= $this->extend('components/dashboard') ?>
<?= $this->section('content') ?>
<div class="row g-3">
    <div class="col-sm-6">
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Pendaftar</h5>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <label for="inputNamaLengkap" class="col-md-4 col-form-label">Nama Lengkap</label>
                    <div class="col-md-8">
                        <input type="text" name="nama_lengkap" id="inputNamaLengkap" class="form-control"
                            value="<?= $pendaftar['nama_lengkap'] ?>" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-md-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-8">
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" id="inputJKLakilaki" class="form-check-input"
                                value="laki-laki" <?= ($pendaftar['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>
                                disabled>
                            <label for="inputJKLakilaki" class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" id="inputJKPerempuan" class="form-check-input"
                                value="perempuan" <?= ($pendaftar['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>
                                disabled>
                            <label for="inputJKPerempuan" class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputAgama" class="col-md-4 col-form-label">Agama</label>
                    <div class="col-md-8">
                        <select name="agama" id="inputAgama" class="form-control" disabled>
                            <?php
                                $agama = ['islam','kristen','hindu','buddha','katholik'];
                                foreach ($agama as $v) {
                                    $checked = ($v == $pendaftar['agama']) ? 'checked' : '';
                                    echo "<option value='$v' $checked >".ucfirst($v)."</option>";
                                }
                                ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputTempatLahir" class="col-md-4 col-form-label">Tempat Lahir</label>
                    <div class="col-md-8">
                        <input type="text" name="tempat_lahir" id="inputTempatLahir" class="form-control"
                            value="<?= $pendaftar['tempat_lahir'] ?>" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputTanggalLahir" class="col-md-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-8">
                        <input type="date" name="tanggal_lahir" id="inputTanggalLahir" class="form-control"
                            value="<?= $pendaftar['tanggal_lahir'] ?>" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Tempat Tinggal</h5>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <label for="inputAlamat" class="col-md-4 col-form-label">Alamat</label>
                    <div class="col-md-8">
                        <input type="text" name="alamat" id="inputAlamat" class="form-control"
                            value="<?= $pendaftar['alamat'] ?>" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <!-- <div class="form-row"> -->
                        <div class="col row">
                            <label for="inputRT" class="col-md-4 col-form-label">RT</label>
                            <div class="col-md-8">
                                <input type="text" name="rt" id="inputRT" class="form-control"
                                    value="<?= $pendaftar['rt'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col row">
                            <label for="inputRW" class="col-md-4 col-form-label">RW</label>
                            <div class="col-md-8">
                                <input type="text" name="rw" id="inputRW" class="form-control"
                                    value="<?= $pendaftar['rw'] ?>" disabled>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
    </div>
</div>
<?= $this->endSection(); ?>