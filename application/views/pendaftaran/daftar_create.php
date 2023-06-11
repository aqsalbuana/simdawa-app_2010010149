<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?= $title ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link href="<?= base_url('assets/assets/vendor/fonts/circular-std/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/assets/libs/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Form Pendaftaran Akun</h3>
                <p>Silahkan isi data pada form Pendaftaran ini.</p>
            </div>
            <div class="card-body">

                <?php $this->load->view('template/notifikasi'); ?>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="no_pendaftaran" required="" placeholder="NO Pendaftaran Mahasiswa" autocomplete="off">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nama_lengkap" required="" placeholder="Nama Lengkap" autocomplete="off">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="no_handphone" required="" placeholder="NO Handphone" autocomplete="off">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Password Akun Anda">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="file" name="bukti_daftar" required="" placeholder="Bukti Daftar">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" name="btn_daftar" type="submit">Daftar Akun</button>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Sudah Punya Akun? <a href="<?= base_url('login') ?>" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>


</html>