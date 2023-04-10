<!DOCTYPE html>
<html>
<head>
	<title>Data Struktur Kepemimpinan Kampus</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin: 20px 0;
			font-size: 1em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}

		table thead tr {
			background-color: #8e7002;
			color: #ffffff;
			text-align: left;
		}

		table th,
		table td {
			padding: 12px 15px;
		}

		table tbody tr {
			border-bottom: 1px solid #dddddd;
		}

		table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		table tbody tr:last-of-type {
			border-bottom: 2px solid #987700;
		}
	</style>
</head>
<body>
	<h1>Data Struktur Kepemimpinan Kampus</h1>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Periode</th>
			</tr>
			<?php
			// Data dosen disimpan dalam bentuk array
		$data = array(
			array('220209', 'Hj.Hizbiyah Rochim Wahab,M.A.','Ketua Umum Ypt Bahrul Ulum','2023'),
			array('223456', 'Prof.Dr.Ir.H.Gatot Ciptadi,Dess.,Ipu.,Asean Eng.','Rektor Unwaha Jombang','2023'),
			array('378906', 'Ino Angga Putra,M.Pd.','Wakil Rektor Bidang Akademik','2023'),
			array('409871', 'Dr.H.Fatkhullah, M.Pd.I.','Wakil Rektor Bidang Kerjasama','2023'),
			array('508762', 'Dr.H.M.Wafiyul Ahdi,M.Pd.I.','Wakil Rektor Bidang Kemahasiswaan','2023'),
			array('698765', 'Dr.H.Abdul Kholid,M.Ag.','Wakil Rektor Bidang Keuangan dan Kerumahtanggaan','2023'),
		);

		// Tampilkan data dosen ke dalam tabel
		foreach ($data as $kampus) {
			echo "<tr>";
			echo "<td>" . $kampus[0] . "</td>";
			echo "<td>" . $kampus[1] . "</td>";
			echo "<td>" . $kampus[2] . "</td>";
			echo "<td>" . $kampus[3] . "</td>";
			echo "<td>" . $kampus[4] . "</td>";
			echo "</tr>";
		}

			?>
		</thead>