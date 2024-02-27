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
				<a href="index.php" class ="bg-info btn text-light"><b>HOME</b></a>
				<a href="kategoribuku.php" class ="bg-info btn text-light"><b>KATEGORI BUKU</b></a>
				<a href="http://localhost/digitallibrary/admin/tampil_buku.php" class ="bg-light btn text-info"><b>BUKU</b></a>
				<a href="http://localhost/digitallibrary/admin/user/tampil_user.php" class ="bg-info btn text-light" ><b>USERS</b></a>
                <a href="tampil_ulasan.php" class ="bg-info btn text-light"><b>ULASAN</b></a>
				<a href="http://localhost/digitallibrary/admin/form_peminjaman.php/" class ="bg-info btn text-light"><b>PEMINJAMAN</b></a>
				<a href="http://localhost/digitallibrary/peminjam/laporanpeminjam.php" class ="bg-info btn text-light"><b>LAPORAN PEMINJAMAN</b></a>
				<a href="../logout.php" class ="btn bg-warning text-light"><b><i>LOGOUT</b></i></a>
			</div>
		</div>
	</div>
</div>
<div class ="container">
<h2 class="mt-3 mb-3">Input Data Buku</h2>
    <div>
    <form method="post" action="tambah_buku.php">
    <div>
        <div class="form-group mt-3">
            <label>ID Buku :</label>
               <input type="text" name="BukuID" class="form-control" placeholder="Contoh : 123456"> 
    </div>

        <div class="form-group mt-3">
            <label>Judul Buku :</label>
                <input type="text" name="Judul" class="form-control" placeholder="Contoh : Laskar Pelangi">
    </div>

    <div>
        <div class="form-group mt-3">
            <label>Penulis :</label>
               <input type="text" name="Penulis" class="form-control " placeholder="Contoh : Andrea Hirata">
    </div>

    <div>
        <div class="form-group mt-3">
            <label>Penerbit :</label>
                <input type="text" name="Penerbit" class="form-control" placeholder="Contoh : Bentang Pustaka">
    </div>
    
    <div>
       <div class="form-group mt-3">
            <label>Tahun Terbit </label>
                <input type="text" name="TahunTerbit" class="form-control" placeholder="Contoh : 2005">
    </div>

    <div class="form-group mt-3 sm-6">  
        <button type="submit" class="btn btn-light text-primary"><b>input</b></button>
    </div>

    <div class="form-group mt-3 sm-6"> 
    <label>Klik tombol ini untuk menuju ke Tampilan Buku :</label> 
       <a href="tampil_buku.php" class="btn btn-light btn-sm"><b>Buku</b></a>    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>