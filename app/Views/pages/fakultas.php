<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<div class="container mt-4 konten">
	<h1 class="text-center w-100 mb-5">Data Fakultas</h1>

	<table class="table table-bordered table-striped">
		<thead>

			<th>id</th>
			<th>Fakultas</th>

		</thead>
		<tbody>

			<tr>
				<td>01</td>
				<td>Fakultas Agama Islam (FAI)</td>
			</tr>

			<tr>
				<td>02</td>
				<td>Fakultas Teknologi Informasi (FTI)</td>
			</tr>

			<tr>
				<td>03</td>
				<td>Fakultas Pertanian (FP)</td>
			</tr>

			<tr>
				<td>04</td>
				<td>Fakultas Ilmu Pendidikan (FIP)</td>
			</tr>

			<tr>
				<td>05</td>
				<td>Fakultas Ekonomi (FE)</td>
			</tr>
		</tbody>
	</table>
</div>

<?php echo $this->endSection() ?>