<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #a8a7f6;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ffb68c;
            color: white;
        }
        .return-btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .return-btn.returned {
            background-color: #2bb373;
            color: white;
        }
        .return-btn.not-returned {
            background-color: #e74c3c;
            color: white;
        }
        .delete-btn {
            padding: 8px 12px;
            background-color: #ec818b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .menu-btn {
            padding: 8px 12px;
            background-color: #fa9a4c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
	<div class ="container text-center">
	<div class="content mt-3">
		<div class="card bg-info bg-gradient" style="--bs-bg-opacity: .75;">
        <div class="card-body">				
				<a href="index.php" class ="bg-info btn text-light"><b>HOME</b></a>
				<a href="tampil_buku.php" class ="bg-info btn text-light"><b>BUKU</b></a>
                <a href="ulasan_buku.php" class ="bg-light btn text-info"><b><i>ULASAN BUKU</i></b></a>
				<a href="http://localhost/digitallibrary/peminjam/form_peminjaman.php/" class ="bg-info btn text-light"><b>PEMINJAMAN</b></a>
				<a href="../logout.php" class ="btn bg-warning text-light"><b><i>LOGOUT</b></i></a>
			</div>
		</div>
	</div>
</div>
<div class ="container">
<h2 class="mt-3 mb-3 text-center"><b>INPUT ULASAN</b></h2>
    <div>
    <form method="post" action="tambah_ulasan.php">
    <div>
        <div class="form-group mt-3">
            <label>User ID :</label>
               <input type="text" name="UserID" class="form-control" placeholder="Masukan User ID Anda"> 
    </div>
    
    <div class="form-group mt-3">
        <label>Buku ID</label>
                <select id="BukuID" name="BukuID" required>
                    <option value="">-- Pilih Buku --</option>
                    <?php
                    // Koneksi ke database
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "digitallibrary";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Ambil data buku dari tabel buku
                    $query = "SELECT BukuID, Judul FROM buku";
                    $result = $conn->query($query);

                    // Tampilkan opsi select berdasarkan data buku
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["BukuID"] . "'>" . $row["BukuID"] . " - " . $row["Judul"] . "</option>";
                        }
                    }

                    // Tutup koneksi
                    $conn->close();
                    ?>
                </select>
                </div>
        <div class="form-group mt-3">
            <label>Ulasan :</label>
                <input type="text" name="Ulasan" class="form-control" placeholder="Beri ulasan atau pendapat anda">
    </div>

    <div class="form-group mt-3">
            <label>Rating :</label>
                <input type="number" name="Rating" class="form-control" placeholder="beri ulasan 1-10">
    </div>

    <div class="form-group mt-2">
         <button type="submit" class="btn btn-primary">daftar</button>
    
