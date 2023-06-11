<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <span class="splash-description">Silahkan Login Terlebih Dahulu.</span>
            </div>
            <div class="card-body">
                <?php $this->load->view('template/notifikasi'); ?>
                <form method="post">
                    <div class="form-group">
                        <input name="username" class="form-control form-control-lg" id="username" type="text" placeholder="Username atau NO. Pendaftaran" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input name="password" class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                    </div>
                    <button type="submit" name="btn_login" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?= base_url('pendaftaran/daftar') ?>" class="btn btn-sm btn-block btn-info">Create An Account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets/assets/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/assets/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>