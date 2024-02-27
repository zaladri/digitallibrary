<?php
include "koneksi.php";

$query = "SELECT * FROM ulasanbuku";
$result = mysqli_query($koneksi, $query);
$dataUlasanbuku = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #a8a7f6;
            color: white;
        }
    </style>
</head>
<body>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buku</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class ="container text-center">
	<div class="content mt-3">
		<div class="card bg-info bg-gradient" style="--bs-bg-opacity: .75;">
			<div class="card-body">				
				<a href="index.php" class ="bg-info btn text-light"><b>HOME</b></a>
				<a href="tampil_buku.php" class ="bg-info btn text-light"><b>BUKU</b></a>
                <a href="ulasan_buku.php" class ="bg-light btn text-info"><b><i>ULASAN BUKU</i></b></a>
				<a href="form_peminjaman.php" class ="bg-info btn text-light"><b>PEMINJAMAN</b></a>
				<a href="../logout.php" class ="btn bg-warning text-light"><b><i>LOGOUT</b></i></a>
			</div>
		</div>
	</div>

    <h2>Buku Perpustakaan</h2>
    <body style="font-family: 'Arial', sans-serif; background-color: #f4f4f4; margin: 0; 
    padding: 20px; display: flex; flex-direction: column; align-items: center;">
    <table style="width: 80%; border-collapse: collapse; margin-top: 20px; background-color: white; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 0 auto;">
        <tr><i>
            <th>Ulasan ID</th>
            <th>User ID</th>
            <th>Buku ID</th>
            <th>Ulasan</th>
            <th>Rating</th>
        </tr></i>

        <?php foreach ($dataUlasanbuku as $ulasanbuku) : ?>
            <tr>
                <td><?= $ulasanbuku['UlasanID']; ?></td>
                <td><?= $ulasanbuku['UserID']; ?></td>
                <td><?= $ulasanbuku['BukuID']; ?></td>
                <td><?= $ulasanbuku['Ulasan']; ?></td>
                <td><?= $ulasanbuku['Rating']; ?></td>
            </tr>
            
        <?php endforeach; ?>
    </table>
    </body>
</html>