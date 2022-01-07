<?php
$session = session();
?>
<?= $this->include('components/head') ?>
<style>
    body {
        font-family: quicksand;
    }
</style>

<body>
    <div class="min-vh-100 d-flex">
        <div class="container align-self-center">
            <div class="col-sm-12 col-md-8 mx-auto">
                <form action="" method="post">
                    <?= csrf_field() ?>
                    <div class="card shadow rounded m-md-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 my-2">
                                    <h4 class="card-title text-center">Login <?= ucfirst($for); ?></h4>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" id="inputEmail"
                                    class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>"
                                    placeholder="Masukkan Email Anda">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" id="inputPassword"
                                    class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>""
                                    placeholder=" Masukkan Password Anda">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            </div>
                            <div class="row mb-3 small">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberme">
                                        <label class="form-check-label " for="rememberme">
                                            Ingat Saya
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <a class="card-link text-decoration-none float-end" href="">Lupa Password?</a>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="w-100 btn-primary rounded p-2">Masuk</button>
                            </div>
                            <hr>
                            <a href="/" class="link-secondary">
                                <span class="fas fa-arrow-left"></span> Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js" integrity="sha256-nk6ExuG7ckFYKC1p3efjdB14TU+pnGwTra1Fnm6FvZ0=" crossorigin="anonymous"></script>

    <?php
    if($session->getFlashdata('notification')){
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '". $session->getFlashdata('notification') ."'
            })
    </script>";
}elseif($session->getFlashdata('issue')){
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: '".$session->getFlashdata('issue')."'
            })
    </script>";
    }?>
</body>