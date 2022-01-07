<?php
$session = session();
?>
<!-- <nav class="navbar navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container justify-content-between">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="/"
            class="col d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none me-lg-auto mb-2 justify-content-center mb-md-0">
            <img class="img-responsive" width="200px" src="assets\img\logo.png">
        </a>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?= $session->account['name'] ?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout">Sign out</a></li>
            </ul>
        </div>
    </div>
</nav> -->

<header class="p-2 mb-3 bg-dark border-bottom">
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="d-flex col-12 flex-sm-wrap flex-md-nowrap align-items-center justify-content-around justify-content-md-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="/admin" class=" d-flex align-items-center mx-2 justify-content-center">
                    <img class="img-responsive" width="200px" src="/assets/img/logo.png">
                </a>

                <div class="dropdown">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="myProfile"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="myProfile">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ($session->account['role'] != 'pendaftar') ? '/admin/' : '/peserta/' ;?>logout">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>