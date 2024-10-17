

<!DOCTYPE html>
<html>
<head>
	<title><center><br>Data Mahasiswa (Dosen)</center><br></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	</head>
<body class=" container h-1000000">
	<h2><center>Data Mahasiswa</center><br></h2>
	<table border="1">
		
		<?php 
		include 'database_M.php';
		if($_GET['role']=="dosen"){
			$x=new dosen();
			$x->tblmahasiswa("mahasiswa");
		}else if($_GET['role'] == "admin"){
			$x=new admin();
			$x->tblmahasiswa("mahasiswa");
		}
		?>
	</table>
	<a href="TAMPILAN_AWAL.php" class="btn btn-primary">Kembali</button>
</body>
</html>