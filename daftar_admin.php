<!DOCTYPE html>
<html>
<head>
  <title> Form Login APP Digital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="register.png" width="500">
                    </div>
                    <div class="col-sm-6">

                        <div class="card-body">
                            <h5> Silahkan Daftar Akun Anda Sebagai Admin</h5>
                            <form method="post" action="http://localhost/digitallibrary/proses_daftarAdmin.php">
                                <div class="form-group mt-3">
                                    <label>Username</label>
                                    <input type="text" name="Username" class="form-control">
                                </div>
                           
                                <div class="form-group mt-2">
                                    <label>Password</label>
                                    <input type="Password" name="Password" class="form-control">
                                </div>

                                <div class="form-group mt-3">
                                    <label>Email</label>
                                    <input type="text" name="Email" class="form-control">
                                </div>

                                <div class="form-group mt-3">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="NamaLengkap" class="form-control">
                                </div>

                                <div class="form-group mt-3">
                                    <label>Alamat</label>
                                    <input type="text" name="Alamat" class="form-control">
                                </div>


                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary">daftar</button>
                                </div>
                                <div class="form-group mt-2">>
                                    <a href="http://localhost/digitallibrary/admin/user/tampil_user.php" class="link">(<b>Klik ini untuk kembali ke Data Pengguna</b>)</a>

                                </div>
                                <div class="form-group mt-2">>
                                    <a href="http://localhost/digitallibrary/petugas/daftar_petugas.php" class="link">(<b>Daftar sebagai Petugas</b>)</a>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <p class="text-center"><i>@2024 UKK Aplikasi Perpustakaan Digital By.SMK Koperasi Pontianak</i>    
    </div>    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>