<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<style>
    .garamond{
        font-family: 'Garamond', serif;
    }
</style>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <!-- <img src="assets/images/favicon.svg" height="48" class='mb-4'> -->
                        <h3>Registrasi</h3>
                    </div>
                    <form class="form form-horizontal">
                        <div class="form-body"> 
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama Pengguna</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="username" class="form-control" name="username">
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" id="email-id" class="form-control" name="email-id">
                                </div>
                                <div class="col-md-4">
                                    <label>Nomer Telepon</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="nomer-hp" class="garamond form-control" name="contact">
                                </div>
                                <div class="col-md-4">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-4">
                                    <label>Kecamatan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select id="Kecamatan" name="Kecamatan" class="form-select">
                                        <option value="" selected disabled>Pilih Kecamatan</option>
                                        <option class="dropdown-item" value="kecamatan1">Kecamatan 1</option>
                                        <option class="dropdown-item" value="kecamatan2">Kecamatan 2</option>
                                        <!-- Tambahkan opsi-opsi lainnya sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Desa</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select id="Desa" name="Desa" class="form-select">
                                        <option value="" selected disabled>Pilih Desa</option>
                                        <option class="dropdown-item" value="kecamatan1">Desa 1</option>
                                        <option class="dropdown-item" value="kecamatan2">Desa 2</option>
                                        <!-- Tambahkan opsi-opsi lainnya sesuai kebutuhan -->
                                    </select>
                                    <!-- <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button> -->
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
    <script>
        document.getElementById('nomer-hp').addEventListener('input', function (event) {
            let inputValue = event.target.value.replace(/\D/g, ''); // Remove non-numeric characters
            const maxLength = 13;

            if (inputValue.length > maxLength) {
                inputValue = inputValue.slice(0, maxLength); // Truncate to 16 digits
            }

            event.target.value = inputValue; // Set the updated value back to the input
        });
    </script>
</body>

</html>
