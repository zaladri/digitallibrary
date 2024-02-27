<?php
include 'koneksi.php';

$UlasanID = $_POST['UlasanID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST ['BukuID'];
$Ulasan = $_POST['Ulasan'];
$Rating = $_POST ['Rating'];

mysqli_query($koneksi,"insert into ulasanbuku values('$UlasanID','$UserID','$BukuID','$Ulasan','$Rating')");

header ("location: ulasan_buku.php");
?>
