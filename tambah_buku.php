<?php
include 'koneksi.php';

$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST ['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST ['TahunTerbit'];

mysqli_query($koneksi,"insert into buku values('$BukuID','$Judul','$Penulis','$Penerbit','$TahunTerbit')");

header("location: tampil_buku.php");
?>
