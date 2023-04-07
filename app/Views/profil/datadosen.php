<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<h1>Data Dosen Fakultas Teknologi Informasi</h1>

	<table class="table">
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
			array('6', 'Achmad Agus Athok Miftachuddin, M.Kom.', '2021.0201.0154', 'IT', '0724088904'),
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

<?php echo $this->endSection() ?>