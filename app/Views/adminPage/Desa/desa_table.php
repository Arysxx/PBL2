<?= $this->extend('layouts/main'); ?>

<?= $this->section('main-content'); ?>
<div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3><?= $head; ?></h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Desa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Daftar Desa
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kode Pos</th>
                                <th>Kode wilayah</th>
                                <th>Nama Kecamatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $desa): ?>
                            <tr>
                                <td><?= $desa['nama']; ?></td>
                                <td><?= $desa['kode_pos']; ?></td>
                                <td><?= $desa['kode_wilayah']; ?></td>
                                <td><?= $desa['id_kecamatan']; ?></td>
                                <td>
                                    <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit"></i></a>
                                    <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>
<?= $this->endSection(); ?>