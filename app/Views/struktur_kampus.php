<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<h1>Data Struktur Kepemimpinan Kampus</h1>
<div class="container" style="min-height: 100vh;">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Periode</th>
			</tr>
		</thead>

		<tbody>

			<?php
		// Data dosen disimpan dalam bentuk array
		$data = array(
			array('220209', 'Hj.Hizbiyah Rochim Wahab,M.A.', 'Ketua Umum Ypt Bahrul Ulum', '2023'),
			array('223456', 'Prof.Dr.Ir.H.Gatot Ciptadi', 'Dess Ipu.', 'Asean Eng.', 'Rektor Unwaha Jombang', '2023'),
			array('378906', 'Ino Angga Putra,M.Pd.', 'Wakil Rektor Bidang Akademik', '2023'),
			array('409871', 'Dr.H.Fatkhullah', 'M.Pd.I.', 'Wakil Rektor Bidang Kerjasama', '2023'),
			array('508762', 'Dr.H.M.Wafiyul Ahdi,M.Pd.I.', 'Wakil Rektor Bidang Kemahasiswaan', '2023'),
			array('698765', 'Dr.H.Abdul Kholid,M.Ag.', 'Wakil Rektor Bidang Keuangan dan Kerumahtanggaan', '2023'),
		);
		
		// Tampilkan data dosen ke dalam tabel
		foreach ($data as $kampus) {
			echo "<tr>";
			echo "<td>" . $kampus[0] . "</td>";
			echo "<td>" . $kampus[1] . "</td>";
			echo "<td>" . $kampus[2] . "</td>";
			echo "<td>" . $kampus[3] . "</td>";
			echo "</tr>";
		}
		
		?>
</tbody>
	</table>
</div>
	<?php echo $this->endSection() ?>