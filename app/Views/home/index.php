<?php
$session = session();
?>
<?= $this->include('components/head') ?>
<script src="/assets/js/ppdb.js"></script>

<body data-bs-spy="scroll" data-bs-target="#main-navbar">
    <!-- HEADER -->
    <header class="sticky-top">
        <!-- <div class="header-top bg-dark text-white py-2">
            <div class="container">
                <div class="row overflow-hidden">
                    <div class="col-xs-6 col-sm-8 col-md-9">
                        <span class="icon-phone"></span>+62 813 900 600 43
                        <span class="icon-envelope-open"></span>smk.alfalahnagreg@yahoo.com
                        <span class="icon-location-pin"></span>Nagreg, Jawa Barat, Indonesia
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 align-self-center">
                        <a href="<?= site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="header-main" class="bg-white text-black shadow">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light" id="main-navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img class="img-responsive" width="200px" src="assets\img\logo.png"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="https://alfalah-smk.sch.id/">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#programKeahlian" id="navDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Program Keahlian
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navDropdown">
                                        <li><a class="dropdown-item" href="#rpl">Rekayasa Perangkat Lunak</a></li>
                                        <li><a class="dropdown-item" href="#dkv">Desain Komunikasi Visual</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pembelajaran">Pembelajaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mitraIndustri">Mitra Industri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#fasilitas">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary nav-link text-white" href="#formDaftar">Daftar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        </div>
    </header>
    <!--//END HEADER -->
    <section class="heroes mb-4" id="heroes">
        <img src="assets/img/ppdb-2021.png" class="d-block img-fluid" alt="PPDB Images" loading="lazy">
    </section>
    <main class="container">
        <section id="programKeahlian" class="mb-5">
            <h2 class="text-center">Program Keahlian di <span class="text-primary-blue">SMK Al-Falah</span></h2>
            <p class="lead">Sekolah Menengah Kejuruan berbasis pesantren</p>
        </section>
        <section id="rpl" class="mb-5">
            <h3 class="text-primary-blue">Rekayasa Perangkat Lunak</h3>
            <p class="lead text-justify">Rekayasa perangkat lunak merupakan salah satu bidang profesi yang mempelajari
                dan mendalami
                cara mengembangkan perangkat lunak misalnya pembuatan, perawatan, pemeliharaan, penerapan, pengubahan
                dan pendekatan atas perangkat lunak yang telah ada agar menjadi perangkat lunak yang lebih efektif dan
                efisien.</p>
            <h4 class="">Ruang lingkup kerja :</h4>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>Desktop Programmer</li>
                        <li>Mobile Programmer</li>
                        <li>Web Programmer</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>Web Development</li>
                        <li>Web Analisis</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="dkv" class="mb-5">
            <h3 class="text-primary-red">Desain Komunikasi Visual</h3>
            <p class="lead text-justify">Desain Komunikasi Visual (DKV) adalah cabang ilmu desain yang mempelajari
                konsep komunikasi
                dan ungkapan kreatif, teknik dan media dengan memanfaatkan elemen-elemen visual ataupun rupa untuk
                menyampaikan pesan untuk tujuan tertentu (tujuan informasi ataupun tujuan persuasi yaitu mempengaruhi
                perilaku).</p>
            <h4 class="">Ruang lingkup kerja :</h4>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>Produk percetakan</li>
                        <li>Pertelevisian</li>
                        <li>Film</li>
                        <li>Animasi</li>
                        <li>Fotografer</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>Layouter</li>
                        <li>Web Designer</li>
                        <li>User Interface</li>
                        <li>Desain komersial</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="pembelajaran" class="mb-5">
            <h2>Pembelajaran Berbasis <span class="text-primary-blue">Produk</span></h2>
            <ul>
                <li>Kunjungan Industri</li>
                <li>Praktek Kerja Lapangan/Praktek Kerja Industri</li>
                <li>Sertifikasi Internasional Microsoft Office Specialist</li>
                <li>Bekerjasama dengan Dunia Usaha/Industri skala nasional</li>
                <li>
                    Pelatihan
                    <ul>
                        <li>Sekolah Akhir pekan dengan Kominfo</li>
                        <li>Oracle Training</li>
                    </ul>
                </li>
            </ul>
        </section>
        <section id="mitraIndustri" class="mb-5">
            <h2>Mitra <span class="text-primary-red">Industri</span></h2>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>UIN Sunan Gunung Jati</li>
                        <li>ITB Jatinangor</li>
                        <li>Balai Diklat Kemenag</li>
                        <li>Indah Foto Studio</li>
                        <li>PWNU Jawa Barat</li>
                        <li>ID Printing</li>
                        <li>LPKIA</li>
                        <li>Basarnas Bandung</li>
                        <li>Telkom</li>
                        <li>PT Kewalram</li>
                        <li>Al-Ma'soem</li>
                        <li>Sanei Case Indonesia</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>LIPI Bandung</li>
                        <li>PMC Software</li>
                        <li>Litbang PU</li>
                        <li>Qolyubi Printing</li>
                        <li>Humanika Kreatif Desain</li>
                        <li>Makuta Printing</li>
                        <li>Katimu Line Media</li>
                        <li>Shella Print</li>
                        <li>Workshop Kreasi</li>
                        <li>Execom Printing</li>
                        <li>Copa Printing</li>
                        <li>C-Kos One Printing</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="fasilitas" class="mb-5">
            <h2><span class="text-primary-blue">Fasilitas</span> Penunjang</h2>
            <ul>
                <li>Ruang Kantor</li>
                <li>Ruang Belajar Berstandar Nasional</li>
                <li>Lab Komputer</li>
                <li>Ruang Praktek Siswa</li>
                <li>Perpustakaan</li>
                <li>Lapangan Olahraga</li>
                <li>Aula berkapasitas 3000 orang</li>
                <li>Asrama Putra Putri</li>
                <li>Masjid Berkapasitas 1500 orang</li>
            </ul>
        </section>
        <section id="formDaftar" class="mb-5">
            <div class="row mb-2">
                <div class="col-12">
                    <div class="form-section d-flex justify-content-center">
                        <nav class="nav nav-pills">
                            <a class="nav-link form-tab active" data-toggle="#step-1" href="#step-1">Detail Siswa</a>
                            <a class="nav-link form-tab" data-toggle="#step-2" href="#step-2">Tempat Tinggal</a>
                            <a class="nav-link form-tab" data-toggle="#step-3" href="#step-3">Konfirmasi</a>
                        </nav>
                    </div>

                    <form role="form" action="daftar" method="post" class="needs-validation" novalidate>
                        <?= csrf_field() ?>
                        <div class="setup-content" id="step-1">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h3 class="text-center mt-4 mb-5">Detail Siswa</h3>
                                </div>
                                <div class="col-sm-8">
                                    <h5>Data Diri</h5>
                                    <hr>
                                    <div class="form-group">
                                        <label for="inputNamaLengkap" class="mb-2"><b>Nama Lengkap</b></label>
                                        <input type="text" name="nama_lengkap" id="inputNamaLengkap" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" aria-describedby="namaLengkapFeedback" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_lengkap') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJenisKelamin" class="mt-2 mb-2"><b>Jenis Kelamin</b></label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="inputRadioLakilaki" aria-describedby="jenisKelaminFeedback" name="jenis_kelamin" value="laki-laki" required>
                                            <label class="form-check-label" for="inputRadioLakilaki">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="inputRadioPerempuan" aria-describedby="jenisKelaminFeedback" name="jenis_kelamin" value="perempuan" required>
                                            <label class="form-check-label" for="inputRadioPerempuan">Perempuan</label>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('jenis_kelamin') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTempatLahir" class="mt-2 mb-2"><b>Tempat Lahir</b></label>
                                        <input type="text" name="tempat_lahir" id="inputTempatLahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" aria-describedby="tempatLahirFeedback" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTanggalLahir" class="mt-2 mb-2"><b>Tanggal Lahir</b></label>
                                        <input type="date" name="tanggal_lahir" id="inputTanggalLahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAgama" class="mt-2 mb-2"><b>Agama</b></label>
                                        <select name="agama" id="inputAgama" class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" required>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('agama') ?>
                                        </div>
                                    </div>
                                    <!-- <h5 class="mt-4 mt-sm-0">Kontak Pribadi</h5>
                                    <hr> -->
                                    <div class="form-group">
                                        <label for="inputTelpPribadi" class="mt-2 mb-2"><b>No Telepon
                                                Pribadi</b></label>
                                        <input type="tel" name="no_telp_pribadi" id="inputTelpPribadi" class="form-control <?= ($validation->hasError('no_telp_pribadi')) ? 'is-invalid' : ''; ?>" aria-describedby="no_telpPribadiHelp">
                                        <div id="no_telpPribadiHelp" class="form-text">Catatan : No Whatsapp yang aktif
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_telp_pribadi') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTelpOrtu" class="mt-2 mb-2"><b>No Telepon Orang Tua</b></label>
                                        <input type="tel" name="no_telp_ortu" id="inputTelpOrtu" class="form-control <?= ($validation->hasError('no_telp_ortu')) ? 'is-invalid' : ''; ?>" aria-describedby="no_telpOrtuHelp">
                                        <div id="no_telpOrtuHelp" class="form-text">Catatan : No Whatsapp yang aktif
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_telp_ortu'); ?>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="mt-2 mb-2"><b>Email aktif</b></label>
                                        <input type="email" name="email" id="inputEmail" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" required  aria-describedby="emailHelp">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                        <div id="emailHelp" class="form-text">Catatan : Email yang aktif dan bisa diakses</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAsalSekolah" class="mt-2 mb-2"><b>Asal Sekolah</b></label>
                                        <input type="text" name="asal_sekolah" id="inputAsalSekolah" class="form-control <?= ($validation->hasError('asal_sekolah')) ? 'is-invalid' : ''; ?>" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('asal_sekolah'); ?>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <button class="btn btn-primary-blue form-btn next-btn" type="button" data-toggle='#step-2'>Selanjutnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setup-content d-none" id="step-2">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h3 class="text-center mt-4 mb-5">Tempat Tinggal</h3>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h5>Alamat Tempat Tinggal</h5>
                                        <hr>
                                        <div class="form-group">
                                            <label for="inputAlamat" class="mb-2"><b>Alamat</b></label>
                                            <textarea name="alamat" id="inputAlamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" required> </textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="inputRT" class="mt-2 mb-2"><b>RT</b></label>
                                                    <input type="number" name="rt" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" min="0" id="inputRT" required>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('rt'); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="inputRW" class="mt-2 mb-2"><b>RW</b></label>
                                                    <input type="number" name="rw" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" min="0" id="inputRW" required>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('rw'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputKelurahan" class="mt-2 mb-2"><b>Kelurahan/Desa</b></label>
                                            <input type="text" name="kel_desa" id="inputKelurahan" class="form-control <?= ($validation->hasError('kel_desa')) ? 'is-invalid' : ''; ?>" required>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('kel_desa'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputKecamatan" class="mt-2 mb-2"><b>Kecamatan</b></label>
                                            <input type="text" name="kecamatan" id="inputKecamatan" class="form-control w-75 <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" required>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('kecamatan'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputKotaKabupaten" class="mt-2 mb-2"><b>Kota/Kabupaten</b></label>
                                            <input type="text" name="kota_kab" id="inputKotaKabupaten" class="form-control w-75 <?= ($validation->hasError('kota_kab')) ? 'is-invalid' : ''; ?>" required>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('kota_kab'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="inputKodePos" class="mt-2 mb-2"><b>Kode Pos</b></label>
                                                    <input type="num" min="0" name="kode_pos" id="inputKodePos" class="form-control w-50 <?= ($validation->hasError('kode_pos')) ? 'is-invalid' : ''; ?>" required>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('kode_pos'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <button class="btn btn-outline-primary-blue form-btn prev-btn" type="button" data-toggle='#step-1'>Sebelumnya</button>
                                            <button class="btn btn-primary-blue form-btn next-btn" type="button" data-toggle='#step-3'>Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- step 3 -->
                        <div class="setup-content d-none" id="step-3">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h3 class="text-center mt-4 mb-5">Konfirmasi Data</h3>
                                </div>
                                <div class="col-sm-8">
                                    <p>Apakah data yang ditulis sudah benar? Jika belum silahkan untuk merubahnya
                                        sebelum
                                        menekan submit</p>
                                    <div class="mb-3 form-check">
                                        <label class="form-check-label" for="persetujuan">
                                            <input type="checkbox" class="form-check-input" id="persetujuan">
                                            Saya sudah yakin
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <button class="btn btn-outline-primary-blue form-btn prev-btn" type="button" data-toggle='#step-2'>Sebelumnya</button>
                                        <button type="submit" class="btn btn-primary-blue" id="submitBtn" disabled>Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"
        integrity="sha256-nk6ExuG7ckFYKC1p3efjdB14TU+pnGwTra1Fnm6FvZ0=" crossorigin="anonymous"></script>
    <?php
    if($session->getFlashdata('notification')){
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '". $session->getFlashdata('notification') ."'
            })
            </script>";
    }elseif ($session->getFlashdata('success')) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Daftar Berhasil',
                text: '". $session->getFlashdata('success') ."'
            })
            </script>";
    }
    ?>

    <!-- <footer class="bg-dark text-white pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?= site_url(); ?>">
                            <img src="<?= base_url() . 'theme/images/logo-footer.png' ?>" class="img-fluid"
                                alt="footer_logo">
                        </a>
                        <p><?= date('Y'); ?> © copyright by <a href="http://alfalah-smk.sch.id"
                                target="_blank">Al-Falah</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a class="text-white text-decoration-none" href="<?= site_url(); ?>">Beranda</a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('about'); ?>">Tentang</a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('artikel'); ?>">Blog </a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('galeri'); ?>">Galeri</a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('contact'); ?>">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Akademik</h3>
                        <ul>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('guru'); ?>">Guru</a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('siswa'); ?>">Siswa </a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('pengumuman'); ?>">Pengumuman</a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('agenda'); ?>">Agenda</a></li>
                            <li><a class="text-white text-decoration-none" href="<?= site_url('download'); ?>">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Nagreg, Jawa Barat, Indonesia.</p>
                        <p>Email : smk.alfalahnagreg@yahoo.com
                            <br> Phone : <br>
                            <a href="http://wa.me/6281390060043">+62 813 900 600 43</a><br>
                            <a href="http://wa.me/6287790060043">+62 877 900 600 43</a>
                        </p>
                        <ul class="nav">
                            <li class="nav-link"><a href="#" role="button" class="btn text-white"><i class="fab fa-facebook " aria-hidden="true"></i></a></li>
                            <li class="nav-link"><a href="#" role="button" class="btn text-white"><i class="fab fa-instagram " aria-hidden="true"></i></a></li>
                            <li class="nav-link"><a href="#" role="button" class="btn text-white"><i class="fab fa-twitter " aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
</body>

</html>