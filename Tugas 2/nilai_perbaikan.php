<!DOCTYPE html>
<html>
<head>
	<title><center>Data Nilai Perbaikan</center></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body class=" container h-100">
 
	<h2><center>Data Nilai Perbaikan<br></center></h2><br>
	<table border="1"><br>
		
		<?php 
		include 'database_N.php';
        if($_GET['role']=="dosen"){
			$x=new dosen();
			$x->tblnilai_perbaikan("nilai_perbaikan");
		}else if($_GET['role'] == "admin"){
			$x=new admin();
			$x->tblnilai_perbaikan("nilai_perbaikan");
		}
		?>
	</table>
    <a href="TAMPILAN_AWAL.php" class="btn btn-primary">Kembali</button>
</body>
</html>