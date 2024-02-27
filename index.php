<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['Level']==""){
		header("location:index.php?pesan=info_login");
	}
 
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class ="container text-center">
	<div class="content mt-3">
		<div class="card bg-info bg-gradient" style="--bs-bg-opacity: .75;">
			<div class="card-body">				
				<a href="index.php" class ="bg-light btn text-info"><b><i>HOME</i></b></a>
				<a href="http://localhost/digitallibrary/admin/kategoribuku.php" class ="bg-info btn text-light"><b>KATEGORI BUKU</b></a>
				<a href="http://localhost/digitallibrary/admin/tampil_buku.php" class ="bg-info btn text-light"><b>BUKU</b></a>
				<a href="tampil_user" class ="bg-info btn text-light" ><b>USERS</b></a>
				<a href="http://localhost/digitallibrary/peminjam/form_peminjaman.php/" class ="bg-info btn text-light"><b>PEMINJAMAN</b></a>
				<a href="http://localhost/digitallibrary/peminjam/laporanpeminjam.php" class ="bg-info btn text-light"><b>LAPORAN PEMINJAMAN</b></a>
				<a href="../logout.php" class ="btn bg-warning text-light"><b><i>LOGOUT</b></i></a>
			</div>
		</div>
	</div>
		<div class="content mt-3">
				<div class="row">
					<div class="col-sm-3">
					<div class="card">
						<div class="card-body bg-warning text-center text-danger" style="--bs-bg-opacity: .05;">
							<h3>INPUT DATA BUKU</h3>
							<h2>3</h2>
							<hr>
						<a href = "buku.php" class ="btn btn-warning btn-sm text-light"><b>Lihat Data</b></a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
					<div class="card">
                    <div class="card-body bg-warning text-center text-danger" style="--bs-bg-opacity: .25;">
							<h3> KATEGORI BUKU</h3>
							<h2>3</h2>
							<hr>
						<a href = "kategoribuku.php" class ="btn btn-warning btn-sm text-light">Lihat Data</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
					<div class="card">
                    <div class="card-body bg-warning text-center text-danger" style="--bs-bg-opacity: .45;">
							<h3>USER</h3>
							<h2>3</h2>
							<hr>
						<a href = "../admin/user/tampil_user.php" class ="btn btn-warning btn-sm text-light">Lihat Data</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
					<div class="card">
                    <div class="card-body bg-warning text-center text-danger" style="--bs-bg-opacity: .65;">
							<h3>PEMINJAMAN</h3>
							<h2>3</h2>
							<hr>
						<a href = "http://localhost/digitallibrary/peminjam/form_peminjaman.php/" class ="btn btn-warning btn-sm text-light">Lihat Data</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="content mt-3"> 
			<div class="card">
				<div class="card-body bg-warning text-center text-danger" style="--bs-bg-opacity: .05;">
					<p>Halo <b><?php echo $_SESSION['Username']; ?></b> Anda Telah Login Sebagai <b><?php 
					echo $_SESSION['Level']; ?></b>.
					</p>
				</div>
			</div>
		</div>
		<div class="content mt-3"> 
			<p class="text-center"><i>@2024 UKK Aplikasi Perpustakaan Digital By.SMK Koperasi Pontianak</i></p>
	</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>	 