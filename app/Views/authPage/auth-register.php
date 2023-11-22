<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">

    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#Kecamatan").change(function(){
                var kecamatanId = $(this).val();
                console.log(kecamatanId);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('desa/getDesa'); ?>",
                    data: { id_kecamatan: kecamatanId },
                    success: function(data){
                        $("#desa").html(data);
                    }
                });
            });
        });
    </script>
</head>
<style>
    .garamond {
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
                                <h3>Form Registrasi</h3>
                            </div>
                            <form class="form form-horizontal" action="/auth/register" method="post">
                                <?= csrf_field() ?>
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
                                            <input type="email" id="email-id" class="form-control" name="email">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomer Telepon</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nomer-hp" class="garamond form-control" name="nomor_telpon">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="password">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kecamatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select id="Kecamatan" name="Kecamatan" class="form-select">
                                                <option value="">Pilih Kecamatan</option>
                                            <?php foreach ($kecamatan as $item) : ?>
                                                <option value="<?= $item['id']; ?>"><?= $item['nama']; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Desa</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select id="desa" name="desa" class="form-select">
                                            <option value="">Pilih Desa</option>
             
                                            </select>
                                            <!-- <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button> -->
                                        </div>
                                        <a href="<?= base_url('/'); ?>">Sudah punya Akun? Login</a>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="submit" class="btn btn-primary mr-1 mb-1" value="Register">
                                        </div>
                                    </div>
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
    <script>
        document.getElementById('nomer-hp').addEventListener('input', function(event) {
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