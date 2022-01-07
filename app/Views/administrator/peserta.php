<?= $this->extend('components/dashboard') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12 mb-2">
        <div class="card shadow">
            <div class="card-header">
                <h5>Data Peserta <?= ucfirst($status); ?></h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tableData">
                        <thead>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>TTL</th>
                            <th>Asal Sekolah</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pendaftar as $p):?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $p['nama_lengkap'] ?></td>
                                    <td><?= ucfirst($p['jenis_kelamin']) ?></td>
                                    <td><?= "$p[tempat_lahir], $p[tanggal_lahir]" ?></td>
                                    <td><?= $p['asal_sekolah'] ?></td>
                                    <td>
                                        <a role="button" href="/admin/peserta/detail/<?= $p['kode_pendaftar'] ?>" class="btn btn-primary-blue rounded-3">
                                            <span class="fas fa-info-circle"></span> Detail</a>
                                        <a role="button" href="/admin/peserta/konfirmasi/<?= $p['kode_pendaftar'] ?>" class="btn btn-success rounded-3">
                                            <span class="fas fa-check-circle"></span> Konfirmasi</a>
                                        <?php
                                        if ($session->account['role'] == 'admin'): ?>
                                        <a role="button" href="/admin/peserta/edit/<?= $p['kode_pendaftar'] ?>" class="btn btn-secondary-blue rounded-3">
                                        <span class="fas fa-edit" data-fa-transform="shrink-8 up-.5" data-fa-mask="fas fa-circle"></span>
                                            Edit</a>
                                        <a role="button" href="/admin/peserta/hapus/<?= $p['kode_pendaftar'] ?>" class="btn btn-outline-primary-red rounded-3">
                                            <span class="fas fa-trash" data-fa-transform="shrink-8 up-.5" data-fa-mask="fas fa-circle"></span>
                                            Hapus</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>