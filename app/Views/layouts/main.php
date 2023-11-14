<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/vendors/chartjs/Chart.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.svg" type="image/x-icon') ?>">
    <script src="https://cdn.tiny.cloud/1/odx1buc7ahmlvmxn270cvyv1ii0781wqqbw0clbi556zje5v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#surat-form',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
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
                    <li class='sidebar-title'>Menu Utama</li>
                    <li class="sidebar-item active ">
                        <a href="index.html" class='sidebar-link'>
                            <i data-feather="home" width="20"></i> 
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="user" width="20"></i> 
                            <span>Kelola Pengguna</span>
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
                            <span>Kelola Data Penduduk</span>
                        </a>
                        
                        <ul class="submenu ">                  
                            <li>
                                <a href="component-alert.html">Data Penduduk</a>
                            </li>
                            <li>
                                <a href="component-alert.html">Tambah Data Penduduk</a>
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
                                <a href="component-extra-avatar.html">Surat Masuk</a>
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
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
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

        <?= $this->renderSection('content') ?>

        <?= $this->include('layouts/footer') ?>
    </div>
</div>

<!-- javascrip -->
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>