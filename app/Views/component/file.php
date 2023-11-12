<?= $this->extend('layouts/main') ?>

<!-- dashboard-section  -->
<?= $this->section('content'); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Kelola Pengguna</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <!-- <canvas id="canvas1" style="height:100px !important"></canvas> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Kelola Arsip Surat</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas2" style="height:100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Kelola Penduduk</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas3" style="height:100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Kelola Wilayah</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas4" style="height:100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <!-- <div class="card">
                        <div class="card-header">
                            <h3 class='card-heading p-1 pl-3'>Sales</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="pl-3">
                                        <h1 class='mt-5'>$21,102</h1>
                                        <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> than last month</p>
                                        <div class="legends">
                                            <div class="legend d-flex flex-row align-items-center">
                                                <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'>Last Month</span>
                                            </div>
                                            <div class="legend d-flex flex-row align-items-center">
                                                <div class='w-3 h-3 rounded-full bg-blue mr-2'></div><span class='text-xs'>Current Month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Surat Masuk</h4>
                            <!-- <div class="d-flex ">
                                <i data-feather="download"></i>
                            </div> -->
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>No. HP</th>
                                            <th>Jenis Surat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Graiden</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>
                                                <span class="badge bg-success">di Proses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dale</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>
                                                <span class="badge bg-success">di Proses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nathaniel</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>
                                                <span class="badge bg-danger">Belum di Proses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Darius</td>
                                            <td>velit@nec.com</td>
                                            <td>0309 690 7871</td>
                                            <td>Ways</td>
                                            <td>
                                                <span class="badge bg-success">di Proses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ganteng</td>
                                            <td>velit@nec.com</td>
                                            <td>0309 690 7871</td>
                                            <td>Ways</td>
                                            <td>
                                                <span class="badge bg-success">di Proses</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oleg</td>
                                            <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                            <td>0500 441046</td>
                                            <td>Rossignol</td>
                                            <td>
                                                <span class="badge bg-success">di Proses</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- <div class="card ">
                        <div class="card-header">
                            <h4>Your Earnings</h4>
                        </div>
                        <div class="card-body">
                            <div id="radialBars"></div>
                            <div class="text-center mb-5">
                                <h6>From last month</h6>
                                <h1 class='text-green'>+$2,134</h1>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="card widget-todo">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h4 class="card-title d-flex">
                                <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
                            </h4>
                        </div>
                        <div class="card-body px-0 py-1">
                            <table class='table table-borderless'>
                                <tr>
                                    <td class='col-3'>UI Design</td>
                                    <td class='col-6'>
                                        <div class="progress progress-info">
                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>60%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>VueJS</td>
                                    <td class='col-6'>
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>30%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>Laravel</td>
                                    <td class='col-6'>
                                        <div class="progress progress-danger">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>50%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>ReactJS</td>
                                    <td class='col-6'>
                                        <div class="progress progress-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>80%</td>
                                </tr>
                                <tr>
                                    <td class='col-3'>Go</td>
                                    <td class='col-6'>
                                        <div class="progress progress-secondary">
                                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class='col-3 text-center'>65%</td>
                                </tr>
                            </table>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </div>
<?= $this->endSection();?>
<!-- end-dashboard-section  -->

<!-- data-user-section  -->
<?= $this->section('user-data'); ?>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pengguna</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Daftar Pengguna
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
                                <td>Offenburg</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>0500 527693</td>
                                <td>New Quay</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>(012165) 76278</td>
                                <td>Grumo Appula</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Darius</td>
                                <td>velit@nec.com</td>
                                <td>0309 690 7871</td>
                                <td>Ways</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Oleg</td>
                                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                <td>0500 441046</td>
                                <td>Rossignol</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kermit</td>
                                <td>diam.Sed.diam@anteVivamusnon.org</td>
                                <td>(01653) 27844</td>
                                <td>Patna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jermaine</td>
                                <td>sodales@nuncsit.org</td>
                                <td>0800 528324</td>
                                <td>Mold</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ferdinand</td>
                                <td>gravida.molestie@tinciduntadipiscing.org</td>
                                <td>(016977) 4107</td>
                                <td>Marlborough</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kuame</td>
                                <td>Quisque.purus@mauris.org</td>
                                <td>(0151) 561 8896</td>
                                <td>Tresigallo</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Deacon</td>
                                <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                <td>07740 599321</td>
                                <td>Karapınar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Channing</td>
                                <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                <td>0845 46 49</td>
                                <td>Warrnambool</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Aladdin</td>
                                <td>sem.ut@pellentesqueafacilisis.ca</td>
                                <td>0800 1111</td>
                                <td>Bothey</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Cruz</td>
                                <td>non@quisturpisvitae.ca</td>
                                <td>07624 944915</td>
                                <td>Shikarpur</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Keegan</td>
                                <td>molestie.dapibus@condimentumDonecat.edu</td>
                                <td>0800 200103</td>
                                <td>Assen</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ray</td>
                                <td>placerat.eget@sagittislobortis.edu</td>
                                <td>(0112) 896 6829</td>
                                <td>Hofors</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxwell</td>
                                <td>diam@dapibus.org</td>
                                <td>0334 836 4028</td>
                                <td>Thane</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Carter</td>
                                <td>urna.justo.faucibus@orci.com</td>
                                <td>07079 826350</td>
                                <td>Biez</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Stone</td>
                                <td>velit.Aliquam.nisl@sitametrisus.com</td>
                                <td>0800 1111</td>
                                <td>Olivar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Berk</td>
                                <td>fringilla.porttitor.vulputate@taciti.edu</td>
                                <td>(0101) 043 2822</td>
                                <td>Sanquhar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Philip</td>
                                <td>turpis@euenimEtiam.org</td>
                                <td>0500 571108</td>
                                <td>Okara</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kibo</td>
                                <td>feugiat@urnajustofaucibus.co.uk</td>
                                <td>07624 682306</td>
                                <td>La Cisterna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bruno</td>
                                <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                                <td>07624 869434</td>
                                <td>Rocca d'Arce</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Leonard</td>
                                <td>blandit.enim.consequat@mollislectuspede.net</td>
                                <td>0800 1111</td>
                                <td>Lobbes</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Hamilton</td>
                                <td>mauris@diam.org</td>
                                <td>0800 256 8788</td>
                                <td>Sanzeno</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Harding</td>
                                <td>Lorem.ipsum.dolor@etnetuset.com</td>
                                <td>0800 1111</td>
                                <td>Obaix</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Emmanuel</td>
                                <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                <td>(016977) 8208</td>
                                <td>Saint-Remy-Geest</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>

<?= $this->endSection();?>
<!-- end-data-user-section  -->

<!-- data-desa-section  -->
<?= $this->section('desa-data'); ?>
<div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Desa</h3>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
                                <td>Offenburg</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>0500 527693</td>
                                <td>New Quay</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>(012165) 76278</td>
                                <td>Grumo Appula</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Darius</td>
                                <td>velit@nec.com</td>
                                <td>0309 690 7871</td>
                                <td>Ways</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Oleg</td>
                                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                <td>0500 441046</td>
                                <td>Rossignol</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kermit</td>
                                <td>diam.Sed.diam@anteVivamusnon.org</td>
                                <td>(01653) 27844</td>
                                <td>Patna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jermaine</td>
                                <td>sodales@nuncsit.org</td>
                                <td>0800 528324</td>
                                <td>Mold</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ferdinand</td>
                                <td>gravida.molestie@tinciduntadipiscing.org</td>
                                <td>(016977) 4107</td>
                                <td>Marlborough</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kuame</td>
                                <td>Quisque.purus@mauris.org</td>
                                <td>(0151) 561 8896</td>
                                <td>Tresigallo</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Deacon</td>
                                <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                <td>07740 599321</td>
                                <td>Karapınar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Channing</td>
                                <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                <td>0845 46 49</td>
                                <td>Warrnambool</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Aladdin</td>
                                <td>sem.ut@pellentesqueafacilisis.ca</td>
                                <td>0800 1111</td>
                                <td>Bothey</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Cruz</td>
                                <td>non@quisturpisvitae.ca</td>
                                <td>07624 944915</td>
                                <td>Shikarpur</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Keegan</td>
                                <td>molestie.dapibus@condimentumDonecat.edu</td>
                                <td>0800 200103</td>
                                <td>Assen</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ray</td>
                                <td>placerat.eget@sagittislobortis.edu</td>
                                <td>(0112) 896 6829</td>
                                <td>Hofors</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxwell</td>
                                <td>diam@dapibus.org</td>
                                <td>0334 836 4028</td>
                                <td>Thane</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Carter</td>
                                <td>urna.justo.faucibus@orci.com</td>
                                <td>07079 826350</td>
                                <td>Biez</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Stone</td>
                                <td>velit.Aliquam.nisl@sitametrisus.com</td>
                                <td>0800 1111</td>
                                <td>Olivar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Berk</td>
                                <td>fringilla.porttitor.vulputate@taciti.edu</td>
                                <td>(0101) 043 2822</td>
                                <td>Sanquhar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Philip</td>
                                <td>turpis@euenimEtiam.org</td>
                                <td>0500 571108</td>
                                <td>Okara</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kibo</td>
                                <td>feugiat@urnajustofaucibus.co.uk</td>
                                <td>07624 682306</td>
                                <td>La Cisterna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bruno</td>
                                <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                                <td>07624 869434</td>
                                <td>Rocca d'Arce</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Leonard</td>
                                <td>blandit.enim.consequat@mollislectuspede.net</td>
                                <td>0800 1111</td>
                                <td>Lobbes</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Hamilton</td>
                                <td>mauris@diam.org</td>
                                <td>0800 256 8788</td>
                                <td>Sanzeno</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Harding</td>
                                <td>Lorem.ipsum.dolor@etnetuset.com</td>
                                <td>0800 1111</td>
                                <td>Obaix</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Emmanuel</td>
                                <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                <td>(016977) 8208</td>
                                <td>Saint-Remy-Geest</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
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
<!-- end-data-desa-section  -->

<!-- data-kecamatan-section  -->
<?= $this->section('kecamatan-data'); ?>
<div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kecamatan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kecamatan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Daftar Kecamatan
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
                                <td>Offenburg</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>0500 527693</td>
                                <td>New Quay</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>(012165) 76278</td>
                                <td>Grumo Appula</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Darius</td>
                                <td>velit@nec.com</td>
                                <td>0309 690 7871</td>
                                <td>Ways</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Oleg</td>
                                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                <td>0500 441046</td>
                                <td>Rossignol</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kermit</td>
                                <td>diam.Sed.diam@anteVivamusnon.org</td>
                                <td>(01653) 27844</td>
                                <td>Patna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jermaine</td>
                                <td>sodales@nuncsit.org</td>
                                <td>0800 528324</td>
                                <td>Mold</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ferdinand</td>
                                <td>gravida.molestie@tinciduntadipiscing.org</td>
                                <td>(016977) 4107</td>
                                <td>Marlborough</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kuame</td>
                                <td>Quisque.purus@mauris.org</td>
                                <td>(0151) 561 8896</td>
                                <td>Tresigallo</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Deacon</td>
                                <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                <td>07740 599321</td>
                                <td>Karapınar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Channing</td>
                                <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                <td>0845 46 49</td>
                                <td>Warrnambool</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Aladdin</td>
                                <td>sem.ut@pellentesqueafacilisis.ca</td>
                                <td>0800 1111</td>
                                <td>Bothey</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Cruz</td>
                                <td>non@quisturpisvitae.ca</td>
                                <td>07624 944915</td>
                                <td>Shikarpur</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Keegan</td>
                                <td>molestie.dapibus@condimentumDonecat.edu</td>
                                <td>0800 200103</td>
                                <td>Assen</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ray</td>
                                <td>placerat.eget@sagittislobortis.edu</td>
                                <td>(0112) 896 6829</td>
                                <td>Hofors</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxwell</td>
                                <td>diam@dapibus.org</td>
                                <td>0334 836 4028</td>
                                <td>Thane</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Carter</td>
                                <td>urna.justo.faucibus@orci.com</td>
                                <td>07079 826350</td>
                                <td>Biez</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Stone</td>
                                <td>velit.Aliquam.nisl@sitametrisus.com</td>
                                <td>0800 1111</td>
                                <td>Olivar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Berk</td>
                                <td>fringilla.porttitor.vulputate@taciti.edu</td>
                                <td>(0101) 043 2822</td>
                                <td>Sanquhar</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Philip</td>
                                <td>turpis@euenimEtiam.org</td>
                                <td>0500 571108</td>
                                <td>Okara</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kibo</td>
                                <td>feugiat@urnajustofaucibus.co.uk</td>
                                <td>07624 682306</td>
                                <td>La Cisterna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bruno</td>
                                <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                                <td>07624 869434</td>
                                <td>Rocca d'Arce</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Leonard</td>
                                <td>blandit.enim.consequat@mollislectuspede.net</td>
                                <td>0800 1111</td>
                                <td>Lobbes</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Hamilton</td>
                                <td>mauris@diam.org</td>
                                <td>0800 256 8788</td>
                                <td>Sanzeno</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Harding</td>
                                <td>Lorem.ipsum.dolor@etnetuset.com</td>
                                <td>0800 1111</td>
                                <td>Obaix</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Emmanuel</td>
                                <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                <td>(016977) 8208</td>
                                <td>Saint-Remy-Geest</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
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
<!-- end-data-kecamatan-section -->