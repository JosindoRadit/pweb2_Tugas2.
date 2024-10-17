<!DOCTYPE html>
<html>
<head>
    <!-- Judul halaman dengan teks yang berada di tengah -->
	<title><center><br>Data Mahasiswa (Dosen)</center><br></title>
    
    <!-- Memuat stylesheet Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Memuat JavaScript Bootstrap dari CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Mengulang link dan script Bootstrap (sebaiknya hapus duplikat ini untuk efisiensi) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<!-- Membuat body dengan kelas Bootstrap dan ketinggian yang sangat besar -->
<body class="container h-1000000">
    <!-- Header teks untuk judul data mahasiswa -->
	<h2><center>Data Mahasiswa</center><br></h2>
	
    <!-- Membuat tabel dengan border -->
	<table border="1">
		
		<?php 
		// Meng-include file 'database_M.php' untuk menggunakan kelas dan fungsi yang didefinisikan di dalamnya
		include 'database_M.php';
        
        // Cek apakah parameter 'role' di URL berisi "dosen"
		if($_GET['role']=="dosen"){
			// Membuat objek baru dari kelas dosen dan memanggil fungsi tblmahasiswa() 
			$x = new dosen();
			$x->tblmahasiswa("mahasiswa");
		}
        // Jika parameter 'role' berisi "admin"
		else if($_GET['role'] == "admin"){
			// Membuat objek baru dari kelas admin dan memanggil fungsi tblmahasiswa()
			$x = new admin();
			$x->tblmahasiswa("mahasiswa");
		}
		?>
	</table>
    
    <!-- Link untuk kembali ke halaman index.php dengan tombol berwarna biru dari Bootstrap -->
	<a href="index.php" class="btn btn-primary">Kembali</a>
</body>
</html>