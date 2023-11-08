<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/vendors/chartjs/Chart.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.svg" type="image/x-icon') ?>">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <!-- <div class="sidebar-header">
        <img src="" alt="" srcset="">
    </div> -->


    <!-- layout sidebar  -->
    <div class="sidebar-menu">
        <ul class="menu">
            
            <li class='sidebar-title'>Main Menu</li>
        
        
        
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>

        
        
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="user" width="20"></i> 
                    <span>Kelole Pengguna</span>
                </a>
                
                <ul class="submenu ">
                                        
                    <li>
                        <a href="component-alert.html">Daftar Pengguna</a>
                    </li>
                    <li>
                        <a href="component-alert.html">Tambah Pengguna</a>
                    </li>  
                </ul>
                
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="triangle" width="20"></i> 
                    <span>Kelole Data Penduduk</span>
                </a>
                
                <ul class="submenu ">                  
                    <li>
                        <a href="component-alert.html">Data Penduduk</a>
                    </li>
                    <li>
                        <a href="component-alert.html">Tambah Penduduk</a>
                    </li>
                    
                </ul>
                
            </li>
        

        
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="file-text" width="20"></i> 
                    <span>Kelola Surat</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li>
                        <a href="component-extra-divider.html">Daftar Surat</a>
                    </li>
                    <li>
                        <a href="component-extra-avatar.html">Buat Surat</a>
                    </li>
                    <li>
                        <a href="component-extra-avatar.html">Proses Surat Masuk</a>
                    </li>
                    
                    
                </ul>
                
            </li>
            
            <!-- <li class='sidebar-title'>Forms &amp; Tables</li> -->
        
        
        
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="briefcase" width="20"></i> 
                    <span>Kelola Data Wilayah</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li>
                        <a href="form-element-input.html">Kelola Kecamatan</a>
                    </li>
                    
                    <li>
                        <a href="form-element-input-group.html">Kelola Desa</a>
                    </li>
                    
                </ul>
                
            </li>

            
         
        </ul>
    </div>
 <!-- end-layout-sidebar  -->

    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    <!-- main-layout  -->
    </div>
            </div>
            <div id="main">
                <nav class="navbar navbar-header navbar-expand navbar-light">
                    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                            <li class="dropdown nav-icon">
                                <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                    <div class="d-lg-inline-block">
                                        <i data-feather="bell"></i>
                                    </div>
                                </a>

                                <!-- notifications-menu  -->
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                    <h6 class='py-2 px-4'>Notifikasi</h6>
                                    <ul class="list-group rounded-none">
                                        <li class="list-group-item border-0 align-items-start">
                                            <div class="avatar bg-success mr-3">
                                                <span class="avatar-content"><i data-feather="mail"></i></span>
                                            </div>
                                            <div>
                                                <h6 class='text-bold'>Surat Keterangan Tidak Mampu</h6>
                                            </div>
                                        </li>   
                                        <li class="list-group-item border-0 align-items-start">
                                            <div class="avatar bg-success mr-3">
                                                <span class="avatar-content"><i data-feather="mail"></i></span>
                                            </div>
                                            <div>
                                                <h6 class='text-bold'>Surat Keterangan Tidak Mampu</h6>
                                            </div>
                                        </li>         
                                        <li class="list-group-item border-0 align-items-start">
                                            <div class="avatar bg-success mr-3">
                                                <span class="avatar-content"><i data-feather="mail"></i></span>
                                            </div>
                                            <div>
                                                <h6 class='text-bold'>Surat Keterangan Tidak Mampu</h6>
                                            </div>
                                        </li>                                              
                                    </ul>
                                </div>
                                <!-- end-notification-menu  -->
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                    <div class="avatar mr-1">
                                        <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                    </div>
                                    <div class="d-none d-md-block d-lg-inline-block">Maireza</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Profile</a> -->
                                    <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i data-feather="settings"></i>Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                
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
                <div class="col-md-8">
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
                <div class="col-md-4">
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
                    <div class="card widget-todo">
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
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- end-main-layout -->

    <!-- footer layout  -->
    <div>
        <div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2023 &copy; Project Based Learning</p>
                    </div>
                    <div class="float-right">
                        <p>Re-Design <span class='text-danger'><i data-feather="heart"></i></span> by Kelompok 4</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
