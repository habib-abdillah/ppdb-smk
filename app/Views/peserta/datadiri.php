<?= $this->extend('components/dashboard') ?>
<?= $this->section('content') ?>
<div class="row g-2">
    <div class="card shadow mb-2 p-2">
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
                $status['text'] = 'Proses';     
                break;
        }
        ?>
        <h5 class="card-title">Status pendaftaran <span
                class="badge bg-<?= $status['color'] ?>"><?= $status['text'] ?></span></h5>
        <p class="card-text">Untuk dapat mengubah data </p>
    </div>
    <div class="col-sm-6">
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Peserta</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td><?= $pendaftar['nama_lengkap'] ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?= ucfirst($pendaftar['jenis_kelamin']) ?></td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td><?= ucfirst($pendaftar['agama']) ?></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td><?= ucfirst($pendaftar['tempat_lahir']) ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td><?= $pendaftar['tanggal_lahir'] ?></td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td><?= $pendaftar['nik'] ?></td>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <td><?= $pendaftar['nisn'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Tempat Tinggal</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Alamat</th>
                                <td><?= $pendaftar['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th>RT/RW</th>
                                <td><?= $pendaftar['rt'] ?>/<?= $pendaftar['rw'] ?></td>
                            </tr>
                            <tr>
                                <th>Kelurahan/Desa</th>
                                <td><?= $pendaftar['kel_desa'] ?></td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td><?= $pendaftar['kecamatan'] ?></td>
                            </tr>
                            <tr>
                                <th>Kota/Kabupaten</th>
                                <td><?= $pendaftar['kota_kab'] ?></td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td><?= $pendaftar['provinsi'] ?></td>
                            </tr>
                            <tr>
                                <th>Kode Pos</th>
                                <td><?= $pendaftar['kode_pos'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Asal Sekolah</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Nama Asal Sekolah</th>
                                <td><?= $pendaftar['asal_sekolah'] ?></td>
                            </tr>
                            <tr>
                                <th>NPSN Sekolah</th>
                                <td><?= $pendaftar['npsn_sekolah'] ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Lulus</th>
                                <td><?= $pendaftar['kel_desa'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Ayah Kandung</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No. KK</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>NIK Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Pendidikan Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Penghasilan Ayah</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>No Telpon Ayah</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Ibu Kandung</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>NIK Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Pendidikan Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Penghasilan Ibu</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>No Telpon Ibu</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Data Wali</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>NIK Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Nama Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Pendidikan Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Penghasilan Wali</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>No Telpon Wali</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow rounded mb-2">
            <div class="card-header">
                <h5>Berkas Pendaftaran</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Kartu Keluarga</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>Akta Kelahiran</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>Sertifikat Vaksin</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>KTP Ayah</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>KTP Ibu</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>Surat Keterangan Lulus</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>Pas Foto</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>Pas Foto Ayah</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>Pas Foto Ibu</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>KIP</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>KIS</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                            <tr>
                                <th>KKS</th>
                                <td><a href="" role="button" class="btn btn-sm btn-info">
                                        <span class="fas fa-eye"></span> Lihat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>