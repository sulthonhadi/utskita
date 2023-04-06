<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DATA DOSEN</title>
	<style>
		body {
			background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20230120/pngtree-nahdlatul-ulama-nu-green-background-image_1539097.jpg');
			/* backround element body */
			background-size: cover;
			/* ukuran backround yang di beri nilai cover yang digunakan untuk mengisi seluruh backround tanpa terpotong */
			font-size: 16px;
			/* ukuran backround */
			padding: 0;
			margin: 0;
			/* Menghilangkan padding bawaan pada elemen <body>, sehingga konten dapat lebih dekat ke tepi layar. */
		
		}

		h1 {
			font-size: 30px;
			/* menentukan ukuran judul*/
			margin-bottom: 20px;
			/* menambahkan margin di bagian bawah judul utama */
			color: #fff;
			/* warna */
			background-color: #127e1d;
			/* warna backround */
			padding: 20px;
			/* jarak di sekeliling judul utama */
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
			/* menambahkan efek bayangan */
			text-align: center;
			/* membuat posisi text berada di tengah */
			border-top: 5px solid #FFD700;
			border-bottom: 7px solid #FFD700;
			/* menambahkan garis tepi */
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
			/*menambahkan efek bayangan*/
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 0 auto;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
			background-color: #fff;
			border-radius: 10px;
			overflow: hidden;
			margin-top: 30px;
			margin-bottom: 30px;
			/* edit table+efek */
		}

		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ccc;
			font-size: 18px;
			font-weight: 500;
			/* untuk memberikan elemen pada tabel */
		}

		th {
			background-color: #127e1d;
			color: #fff;
			border-top: 5px solid #FFD700;
			border-bottom: 5px solid #FFD700;
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
			/* edit judul utama */
		}
		
		tr:hover {
			background-color: #c4c4c4;
		}
		/* memiliki fungsi untuk menentukan warna latar belakang setiap baris tabel */
	</style>
</head>
<body>
<h1><img src="https://pjm.unwaha.ac.id/wp-content/uploads/2020/07/logo-unwaha.png"><br>Data Dosen Fakultas Teknologi Informasi</h1>
<center>
<table border="1">
  <tr>
    <th>NO</th>
    <th>NAMA DOSEN</th>
    <th>NIY</th>
    <th>PRODI</th>
    <th>NIDN</th>
  </tr>
  <?php
  // Data dosen disimpan dalam bentuk array
  $data_dosen = array(
    array('1', 'Primadi Airlangga, M.I.T.', '2010.0205.0133', 'IT', '0718108602'),
    array('2', 'Sujono, M.kom', '2018.0201.0123', 'IT', '0725068804'),
    array('3', 'Dr.H. Nurul Yaqin,M.sc', 'UBU.2002.03.10802', 'IT', '0711026001'),
	array('4', 'Moh. Anshori Aris Widya, M.Kom.', '2018.0201.0124	', 'IT', '0729068607'),
	array('5', 'Dr. Zulfikar, S.P., M.Si.,', 'UBU.2005.02.10802	', 'IT', '0724116802'),
    array('6', 'Achmad Agus Athok Miftachuddin, M.Kom.','2021.0201.0154', 'IT', '0724088904'),
	array('7', 'Munawarah, M.si', 'UBU.2002.04.10804', 'SI', '0720107801'),
    array('8', 'Siti Sufaidah, S.kom, M.si.', '2005.0203.0131', 'SI', '0716079202'),
	array('9', 'Tholib Hariono,M.kom', '2009.0204.0134', 'SI', '0709038301'),
    array('10', 'Agus Sifaunajah, M.Kom.', 'UBU.2009.08.55.201', 'SI', '0705088501'),
    array('11', 'Dr. Muhyiddin Zainul Arifin, S.E., M.M.', 'UBU.2002.01.10804', 'SI', '0709047301'),
    array('12', 'Nur Khafidhoh, M.Kom.', '2018.0203.0131', 'SI', '0716079202'),

  );

  // Tampilkan data dosen ke dalam tabel
  foreach ($data_dosen as $dosen) {
    echo "<tr>";
    echo "<td>" . $dosen[0] . "</td>";
    echo "<td>" . $dosen[1] . "</td>";
    echo "<td>" . $dosen[2] . "</td>";
    echo "<td>" . $dosen[3] . "</td>";
    echo "<td>" . $dosen[4] . "</td>";
    echo "</tr>";
  }
  
  ?>
</table>

  </center>
</body

