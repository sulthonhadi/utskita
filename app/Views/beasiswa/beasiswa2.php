<?php
include("nav.php");
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>beasiswa</title>

	
</head>
<body>


<!doctype html> 
<html lang="en"> 
 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
 <title>PROGRAM BEASISWA UNWAHA</title> 
 
 <!-- Bootstrap --> 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
 <!-- Bootstrap Icon - short-cut(bina-bsicon) --> 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head> 
 
<body> 
 <div class="container mt-5" >
    <div class="row">
            <h1 class="text-center mb-5">BEASISWA UNWAHA KIP</h1>
        </div>
    </div>
   </div> 
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="aksi_tambah.php" method="post">
				<div class="mb-3">
                    <label for="nik" class="form-label">Nomor NIK</label>
                    <input type="nik" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
				<div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="no_hp" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="sekolah" class="form-label">Sekolah Asal</label>
                    <input type="text" class="form-control" id="sekolah" name="sekolah" required>
                </div>
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai Rata-rata</label>
                    <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
                </div>
                <div class="d-grid gap-2">
                    <a href="<?= base_url('/beasiswa2')?>" class="btn btn-primary btn-lg">Daftar</a>
                </div>
            </form>
			<br>
			<?php
if(!empty($_GET['pesan'])){
    echo 'Berhasil Di Input';
}
?>
        </div>
    </div>
 
 
 <!-- Bootstrap --> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 

	</div>

</body>
</html>
