<?php
$session = session();
?>
<aside class="offcanvas offcanvas-start p-2 text-white bg-dark" tabindex="-1" id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" data-bs-target="#my-offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/admin" class="nav-link text-white">
                    <span class="fas fa-dashboard"></span>
                    Dashboard
                </a>
            </li>
            <?php if($session->account['role'] == 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link text-white" data-bs-toggle="collapse" href="#masterCollapse" role="button"
                    aria-expanded="false" aria-controls="masterCollapse">
                    <span class="fas fa-boxes"></span>
                    Master Data
                </a>
                <nav class="collapse nav-link" id="masterCollapse">
                    <div class="nav nav-pills flex-column mb-auto">
                        <a href="/admin/peserta/terdaftar" class="nav-link text-white">
                            <span class="fas fa-user"></span>
                            User Terdaftar
                        </a>
                        <a href="/admin/peserta/verifikasi" class="nav-link text-white">
                            <span class="fas fa-user-check"></span>
                            User Terverifikasi
                        </a>
                        <a href="/admin/peserta/lolos" class="nav-link text-white">
                            <span class="fas fa-users"></span>
                            User Lolos
                        </a>
                        <a href="/admin/peserta/tidak_lolos" class="nav-link text-white">
                            <span class="fas fa-user-slash"></span>
                            User Tidak Lolos
                        </a>
                    </div>
                </nav>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " data-bs-toggle="collapse" href="#uploadCollapse" role="button"
                    aria-expanded="false" aria-controls="uploadCollapse">
                    <span class="fas fa-upload"></span>
                    Upload Data
                </a>
                <nav class="collapse nav-link" id="uploadCollapse">
                    <div class="nav nav-pills flex-column mb-auto">
                        <a href="" class="nav-link text-white">
                            <span class="fas fa-file-alt"></span>
                            Brosur
                        </a>
                        <a href="" class="nav-link text-white">
                            <span class="fas fa-info"></span>
                            Alur PPDB
                        </a>
                    </div>
                </nav>
            </li>
            <?php elseif($session->account['role'] == 'operator'): ?>
            <li class="nav-item">
                <a href="" class="nav-link text-white">
                    <span class="fas fa-search"></span>
                    Cek Pendaftar
                </a>
            </li>
            <?php else : ?>
            <li class="nav-item">
                <a href="/peserta/data_pendaftaran" class="nav-link text-white">
                    <span class="fas fa-user"></span>
                    Data Pendaftaran
                </a>
            </li>
            <li class="nav-item">
                <a href="/peserta/konfirmasi_pembayaran" class="nav-link text-white">
                    <span class="fas fa-upload"></span>
                    Konfirmasi Pembayaran
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>