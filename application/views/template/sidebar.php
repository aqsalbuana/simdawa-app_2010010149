<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url('home') ?>" class="nav-link"><i class="fas fa-tv"></i>Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-database"></i>Master Data</a>
                        <div id="submenu-2" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-item" href="<?= base_url('beasiswa'); ?>">Beasiswa</span></a>
                                </li>
                                <?php if ($this->session->userdata('peran') != 'USER') : ?>
                                    <li class="nav-item">
                                        <a class="nav-item" href="<?= base_url('jenis'); ?>">Jenis Beasiswa</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-item" href="<?= base_url('persyaratan'); ?>">Persyaratan</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-item" href="<?= base_url('pendaftaran'); ?>">Pendaftaran</span></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->session->userdata('peran') != 'USER') : ?>
                                    <li class="nav-item">
                                        <a class="nav-item" href="<?= base_url('pengguna'); ?>">Pengguna</span></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-database"></i>Master Data</a>
                        <div id="submenu-3" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-item" href="<?= base_url('pengajuan'); ?>">Pengajuan Keseluruha</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="<?= base_url('pengajuan/diusulkan'); ?>">Pengajuan Diusulkan</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="<?= base_url('pengajuan/ditetapkan'); ?>">Pengajuan Ditetapkan</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>