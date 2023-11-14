<?= $this->extend('layouts/main'); ?>

<?= $this->section('main-content'); ?>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $head; ?></h3>
                <p class="text-subtitle text-muted">Buat Template Surat mu Sendiri</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembuatan Surat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <!-- <div class="card-header">
                <h4 class="card-title">Body</h4>
            </div> -->
            <textarea class="card-body" id="surat-form">

            </textarea>
                <div class="card">
                    <div class="card-header">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary">Kembali</a>
                            <a href="#" class="btn btn-primary">Simpan</a>
                            <a href="#" class="btn btn-primary btn-progress">Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>