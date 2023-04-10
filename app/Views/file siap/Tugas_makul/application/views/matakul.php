<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Jadwal Matkul" />
	<meta name="author" content="SIA Unwaha" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Jadwal Mata Kuliah</title>
</head>

<body>

	<nav class="navbar fixed-top navbar-light" style="background-color: #285430;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" style="font-family: Verdana, Geneva, Tahoma, sans-serif; color:beige;">
				<h5>SIA - UNWAHA</h5>
			</a>
		</div>
	</nav>
	<div class="table-responsive" style="padding:30px;overflow-x: auto;">
		<br><br><br><br>
		<h4 style="margin-left: 30px;">Jadwal Mata Kuliah Kelas A</h4>
	<table class="table table-bordered table-striped table-hover" style="border:green solid 2px; margin-top: 30p;" >
		<thead>
			<tr class="text-center">
				<th scope="col">No</th>
				<th scope="col">Kode Matakuliah</th>
				<th scope="col">Matakuliah</th>
				<th scope="col">Jumlah SKS</th>
				<th scope="col">Jadwal Kuliah</th>
				<th scope="col">Dosen Pengampu</th>
				<th scope="col">Kelas</th>
				
			</tr>
		</thead>
		<tbody>
			<?php foreach ($kelas_a as $no => $jadwal): ?>
			<tr class="text-center">
				<th scope="row"><?=$no + 1 ?></th>
				<td><?= $jadwal->kode_mk ?></td>
				<td><?= $jadwal->mk ?></td>
				<td><?= $jadwal->sks ?></td>
				<td><?= $jadwal->jwl ?></td>
				<td><?= $jadwal->dosen ?></td>
				<td><?= $jadwal-> kls?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>
	<br>
	
	<div class="table-responsive"  style="padding:30px;overflow-x: auto;">
	<h4 style="margin-left: 30px;">Jadwal Mata Kuliah Kelas B</h4>
	<table class="table table-bordered table-striped table-hover" style="margin-top: 30px;border:green solid 2px;">
		<thead>
			<tr class="text-center">
				<th scope="col">No</th>
				<th scope="col">Kode Matakuliah</th>
				<th scope="col">Matakuliah</th>
				<th scope="col">Jumlah SKS</th>
				<th scope="col">Jadwal Kuliah</th>
				<th scope="col">Dosen Pengampu</th>
				<th scope="col">Kelas</th>
				
			</tr>
		</thead>
		<tbody>
		<?php foreach ($kelas_b as $no => $jadwal): ?>
			<tr class="text-center">
				<th scope="row"><?=$no + 1 ?></th>
				<td><?= $jadwal->kode_mk ?></td>
				<td><?= $jadwal->mk ?></td>
				<td><?= $jadwal->sks ?></td>
				<td><?= $jadwal->jwl ?></td>
				<td><?= $jadwal->dosen ?></td>
				<td><?= $jadwal-> kls?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	</div>
<br><br><br>	
<footer class="text-center text-white" style="background-color: black;">
		<!-- Grid container -->
		<div class="container p-4"></div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2023 Copyright:
			<a class="text-white" href="#">Sisitem Informasi Akademik.License to Universitas KH.A.Wahab Hasbullah Jombang</a>
		</div>
		<!-- Copyright -->
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

</html>
