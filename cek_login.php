<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where Username='$Username' and Password='$Password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['Level']=="admin"){
 
		// buat session login dan username
		$_SESSION['Username'] = $Username;
		$_SESSION['Level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['Level']=="petugas"){
		// buat session login dan username
		$_SESSION['Username'] = $Username;
		$_SESSION['Level'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:petugas/index.php");
 
	// cek jika user login sebagai peminjam
	}else if($data['Level']=="peminjam"){
		// buat session login dan username
		$_SESSION['Username'] = $Username;
		$_SESSION['Level'] = "peminjam";
		// alihkan ke halaman dashboard pengurus
		header("location:peminjam/index.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>