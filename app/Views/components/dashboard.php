<?php
$session = session();
?>
<?= $this->include('components/head') ?>

<body class="min-vh-100">

    <?= $this->include('components/navbar') ?>

    <?= $this->include('components/sidebar') ?>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>
    <footer class="text-center">
        <span>&copy; <?= date("Y") ?></span>
    </footer>

    <script src="/assets/js/app.js"></script>
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
</body>