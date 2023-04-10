<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota Perpustakaan</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Data Anggota Perpustakaan</h1>
	<table>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>TTL</th>
			<th>Jurusan </th>
			<th>No. Telp</th>
			<th>Email</th>
			<th>Alamat</th>
		</tr>
		<?php
			$data = array(
				array('1','20230001','Nani Permata Sari','P','Jakarta, 10 Mei 2002','Sistem Informasi','089123456789','nanipermatasari@gmail.com','Jakarta'),
				array('2','20230002','Adinda Mutia Mundawati','P','Jakarta, 17 Februari 2002','Informatika','089123456789','adindamutia@gmail.com','Jakarta'),
				array('3','20230003','Endira Sekar Safitri','P','Semarang, 13 Mei 2003','Informatika','089123456789','endirasekar@yahoo.com','Semarang'),
				array('4','20230004','Yogi Triyono','L','Jakarta, 09 September 2002','Agrobisnis','089123456789','yogitriono@yahoo.com','Jakarta'),
				array('5','20230005','Diaz Ayu Hapsari','P','Bandung, 25 Januari 2001','Pendidikan Bahasa Inggris','089123456789','diazayuhap@gamil.com','Bandung'),
				array('6','20230006','Novi Kartika Sari','P','Yogyakarta, 16 Juni 2002','Pendidikan Bahasa Arab','089123456789','novikartikasari@yahoo.com','Yogyakarta'),
				array('7','20230007','Bayu Setianto','L','Demak, 13 Maret 2001','Ekonomi Syariah','089123456789','bayusetianto@yahoo.com','Demak'),
				array('8','20230008','Jefri Ardiansyah','L','Bogor, 26 April 2002','Manajemen','089123456789','jefriardiansyah@yahoo.com','Bogor'),
			);
			 
			foreach ($data as $anggota) {
				echo "<tr>";
				echo "<td>" . $anggota[0] . "</td>";
				echo "<td>" . $anggota[1] . "</td>";
				echo "<td>" . $anggota[2] . "</td>";
				echo "<td>" . $anggota[3] . "</td>";
				echo "<td>" . $anggota[4] . "</td>";
				echo "<td>" . $anggota[5] . "</td>";
				echo "<td>" . $anggota[6] . "</td>";
				echo "<td>" . $anggota[7] . "</td>";
				echo "<td>" . $anggota[8] . "</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
