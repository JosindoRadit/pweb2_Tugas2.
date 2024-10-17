<?php
// Mengecek apakah parameter 'role' ada di URL
if(isset($_GET['role'])){
    $role = $_GET['role'];
    
    // Menentukan nilai $x berdasarkan peran
    if($role == "admin"){
        $x="?role=admin";
    }else if($role == "dosen"){
        $x="?role=dosen";
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Link ke Bootstrap CSS dari CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Link ke Bootstrap JavaScript dari CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="h-100">
 <!-- Bagian navigasi menggunakan Bootstrap Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TUGAS 2</a>
    <!-- Tombol untuk tampilan responsif pada perangkat kecil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <!-- Dropdown menu untuk Administrator -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrator</a>
          <ul class="dropdown-menu">
            <!-- Link ke halaman 'mahasiswa.php' dengan parameter 'role=admin' -->
            <li><a class="dropdown-item" href="mahasiswa.php?role=admin">Mahasiswa</a></li>
            <!-- Link ke halaman 'nilai_perbaikan.php' dengan parameter 'role=admin' -->
            <li><a class="dropdown-item" href="nilai_perbaikan.php?role=admin">Nilai Perbaikan</a></li>
          </ul>
        </li>
        <!-- Dropdown menu untuk Dosen -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dosen</a>
          <ul class="dropdown-menu">
            <!-- Link ke halaman 'mahasiswa.php' dengan parameter 'role=dosen' -->
            <li><a class="dropdown-item" href="mahasiswa.php?role=dosen">Mahasiswa</a></li>
            <!-- Link ke halaman 'nilai_perbaikan.php' dengan parameter 'role=dosen' -->
            <li><a class="dropdown-item" href="nilai_perbaikan.php?role=dosen">Nilai Perbaikan</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bagian tengah halaman dengan teks "Welcome!!" yang diposisikan di tengah -->
<div class="d-flex justify-content-center align-items-center h-100">
  <h1 class="text-black">Welcome!!</h1><br>
</div>
</body>
</html>
