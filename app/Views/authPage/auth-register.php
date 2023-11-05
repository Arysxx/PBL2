<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.svg') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

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
                    <form action="index.html">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Nama Depan</label>
                                    <input type="text" id="first-name-column" class="form-control"  name="fname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column">Username</label>
                                    <input type="text" id="username-column" class="form-control" name="username-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Kecamatan</label>
                                    <input type="text" id="country-floating" class="form-control" name="country-floating">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Password</label>
                                    <input type="password" id="last-name-column" class="form-control"  name="password">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Desa</label>
                                    <input type="text" id="company-column" class="form-control" name="company-column">
                                </div>
                            </div>
                        </diV>

                                <a href="<?= base_url('login') ?>">Sudah Punya Akun? Login</a>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
