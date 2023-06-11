<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php
                $this->load->view('/template/notifikasi') //memanggil notifikasi.php
                ?>
                <div class="page-header">
                    <h2 class="pageheader-title">Data Jenis Beasiswa</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('jenis') ?>" class="breadcrumb-link">Jenis Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Jenis Beasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">Data Jenis Beasiswa
                        <a href="<?= base_url('jenis/tambah') ?>" class="btn btn-sm btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Data</a>
                        <a href="<?= base_url('jenis/cetak') ?>" target="_blank" class="btn btn-sm btn-info float-right">
                            <i class="fas fa-print"></i> Cetak Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis Beasiswa</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jenis as $j) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $j->nama_jenis ?></td>
                                        <td><?= $j->keterangan ?></td>
                                        <td><a href="<?= base_url('jenis/ubah/') ?><?= $j->id ?>" class="btn btn-info btn-sm" <i class="fas fa-edit"></i>Ubah</a></td>
                                        <td><a href="<?= base_url('jenis/hapus/') ?><?= $j->id ?>" onclick="return confirm('Yakin ingin menghapus Data ini')" class="btn btn-danger btn-sm" <i class="fas fa-trash"></i>Hapus</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>