<?php
$mahasiswa = [
	[
		"nim" => "220490550",
		"nama" => "Muhammad Saputra",
		"prodi" => "Ekonomi Syariah",
		"fakultas" => "Agama Islam",
		"alamat" => "Lamongan"
	],
	[
		"nim" => "220490700",
		"nama" => "Acmad Iqbal",
		"prodi" => "Pendidikan Fisika",
		"fakultas" => "Ilmu Pendidikan",
		"alamat" => "Jombang"
	],
	[
		"nim" => "220490808",
		"nama" => "Muhammad Kurniawan",
		"prodi" => "Manajemen",
		"fakultas" => "Ekonomi",
		"alamat" => "Sidoarjo"
	],
	[
		"nim" => "220490810",
		"nama" => "Indah Lestari",
		"prodi" => "Manajemen",
		"fakultas" => "Ekonomi",
		"alamat" => "Surabaya"
	],
	[
		"nim" => "220490860",
		"nama" => "Muhammad Syafaat",
		"prodi" => "Pendidikan Biologi",
		"fakultas" => "Ilmu Pendidikan",
		"alamat" => "Surabaya"
	],
	[
		"nim" => "220490868",
		"nama" => "Adit Firmansyah",
		"prodi" => "Agribisnis",
		"fakultas" => "Pertanian",
		"alamat" => "Surabaya"
	],
	[
		"nim" => "220490870",
		"nama" => "Sherli Putri",
		"prodi" => "Bahasa Inggris",
		"fakultas" => "Ilmu Pendidikan",
		"alamat" => "Nganjuk"
	],
	[
		"nim" => "220490877",
		"nama" => "Apriliah",
		"prodi" => "Pendidikan Matematika",
		"fakultas" => "Ilmu Pendidikan",
		"alamat" => "Jombang"
	],
	[
		"nim" => "220490910",
		"nama" => "Muhammad Udin",
		"prodi" => "Informatika",
		"fakultas" => "Teknologi Informasi",
		"alamat" => "Ngawi"
	],
	[
		"nim" => "220490912",
		"nama" => "Novan Agus",
		"prodi" => "Informatika",
		"fakultas" => "Teknologi Informasi",
		"alamat" => "Jombang"
	],
	[
		"nim" => "220490945",
		"nama" => "Dinda",
		"prodi" => "Bahasa Arab",
		"fakultas" => "Agama Islam",
		"alamat" => "Jombang"
	],
	[
		"nim" => "220490970",
		"nama" => "Amelia Putri",
		"prodi" => "Bahasa Arab",
		"fakultas" => "Agama Islam",
		"alamat" => "Surabaya"
	],
	[
		"nim" => "220490976",
		"nama" => "Putri Nabila",
		"prodi" => "Informatika",
		"fakultas" => "Teknologi Informasi",
		"alamat" => "Jombang"
	],
	[
		"nim" => "220490990",
		"nama" => "Ahmad Nur",
		"prodi" => "Bahasa Inggris",
		"fakultas" => "Ilmu Pendidikan",
		"alamat" => "Sidoarjo"
	],
	[
		"nim" => "220490998",
		"nama" => "Muhammad Ardiansyah",
		"prodi" => "Sistem Informasi",
		"fakultas" => "Teknologi Informasi",
		"alamat" => "Nganjuk"
	],

]
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
  * {
			font-family: sans-serif;
		}

		body {
			padding: 0;
			margin: 0;
			line-height: 1.25;
		}

		th {
			border-bottom: 4px solid black;
			border-right: 1px solid black;
			padding: 14px 20px;
			background: #198754;
			color: white;
		}

		table tr:nth-child(2n+0) {
			background: #20c997;;
			color: white;
		}

		/* laptop */
		@media (max-width : 1336px) {
			html {
				font-size: 75%;
			}

			.tabel-container {
				display: flex;
				justify-content: center;
				flex-direction: column;
				overflow-x: auto;
				overflow-y: auto;
				margin: 20px;
				padding: 10px;
			}

			.dtabel {
				font-family: sans-serif;
				color: black;
				border-collapse: collapse;
				table-layout: fixed;
				padding: 0;
				margin: 0;
			}

		}

		/* tablet */
		@media (max-width : 820px) {
			html {
				font-size: 65%;
			}

			.tabel-container {
				display: flex;
				justify-content: center;
				flex-direction: column;
				overflow-x: auto;
				overflow-y: auto;
				margin: 20px;
				padding: 10px;
			}

		}
</style>
<body class="bg-light">

<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h2> <p class="text-center">Daftar Mahasiswa Baru 2023</p> </h2>
<div class="mx-auto p-2" style="width: 10;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah</button>
</div>
<hr>
<div class="mx-auto p-2" style="width: 10;">
<table class="table" border>
  <thead class="table-dark">
    
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Fakultas</th>
        <th>Alamat</th>
    </tr>

</thead>
<tbody>
	<?php $i = 1 ?>
	<?php foreach ($mahasiswa as $key) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $key["nim"]; ?></td>
			<td><?= $key["nama"]; ?></td>
			<td><?= $key["prodi"]; ?></td>
			<td><?= $key["fakultas"]; ?></td>
			<td><?= $key["alamat"]; ?></td>
							
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('Admin/tambah')?>" method="post"  enctype="multipart/form-data" role="form">
        <div class="form-group">
            <label for="nim" class="col-form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim">
          </div>

          <div class="form-group">
            <label for="nama" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="prodi" class="col-form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi">
          </div>
          <div class="form-group">
            <label for="fakultas" class="col-form-label">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas">
          </div>
          <div class="form-group">
            <label for="alamat" class="col-form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">

            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan&nbsp;</button>
      </div>
          </div>
       
        </form>
      </div>
    
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>