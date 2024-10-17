<!DOCTYPE html>
<html>
<head>
    <!-- Judul halaman, berisi teks yang berada di tengah -->
	<title><center>Data Nilai Perbaikan</center></title>
    
    <!-- Memuat stylesheet Bootstrap dari CDN untuk styling yang rapi dan responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Memuat JavaScript Bootstrap dari CDN untuk fungsi interaktif (misalnya dropdowns, modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Duplikat link dan script Bootstrap (sebaiknya hapus duplikat ini untuk efisiensi) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<!-- Membuat body halaman dengan class container Bootstrap untuk layout yang rapi dan h-100 untuk tinggi penuh -->
<body class="container h-100">
 
    <!-- Header teks untuk judul "Data Nilai Perbaikan" dengan teks terpusat -->
	<h2><center>Data Nilai Perbaikan<br></center></h2><br>
	
    <!-- Membuat tabel HTML dengan border -->
	<table border="1"><br>
		
		<?php 
		// Meng-include file 'database_N.php' yang kemungkinan berisi kelas dosen dan admin
		include 'database_N.php';
        
        // Mengecek apakah parameter 'role' di URL adalah "dosen"
        if($_GET['role']=="dosen"){
			// Membuat objek baru dari kelas dosen dan memanggil metode tblnilai_perbaikan()
			$x = new dosen();
			$x->tblnilai_perbaikan("nilai_perbaikan");
		}
        // Jika parameter 'role' adalah "admin"
        else if($_GET['role'] == "admin"){
			// Membuat objek baru dari kelas admin dan memanggil metode tblnilai_perbaikan()
			$x = new admin();
			$x->tblnilai_perbaikan("nilai_perbaikan");
		}
		?>
	</table>
    
    <!-- Tombol kembali ke halaman index.php, menggunakan class btn-primary dari Bootstrap -->
    <a href="index.php" class="btn btn-primary">Kembali</a>
</body>
</html>