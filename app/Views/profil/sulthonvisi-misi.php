<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>

<style>
		

	

	.title{
		background-color: yellow;
		font-family: 'bold';

	}

	body {
		font-family: roboto;
		background-color: rgb(153, 225, 201);
	}

	.container {
		
		width: 60%;
		
	}

	.visi {
		font-size: 16px;
		color: #000;
		margin-bottom: 20px;
	}

	.misi {
		font-size: 16px;
		color: #000;
		margin-bottom: 20px;
	}


	.tujuan {
		font-size: 16px;
		color: #000;
		margin-bottom: 20px;
	}

</style>
<center>
<img src="https://unwaha.ac.id/wp-content/uploads/2022/12/Gedung-Baru-UNWAHA.jpg" class="w-76 mx-auto">
<div class="title">
	<h1>VISI & MISI</h1>
</div>

<div class="container">
	<div class="visi">
		<h1>Visi :<h1>
				<h4>Pada tahun 2035 menjadi institusi pendidikan tinggi berstandar
					internasional yang berperan aktif dalam pengembangan IPTEK,
					pengelolaan sumber daya alam, dan peningkatan kualitas sumber daya manusia seutuhnya.<h4>
	</div>

	<br>
	<div class="misi">
		<h1>Misi :<h1>
				<h4>
					1. Menyelenggarakan pendidikan, penelitian dan pengabdian kepada masyarakat dan pengelolaan Sumber Daya Alam berbasis iman dan taqwa.
					<br>2. Mengembangkan dan menerapkan IPTEK yang berkualitas handal yang mampu bersaing secara internasional dan berwawasan lingkungan.
					<br>3. Meningkatkan kualitas sumber daya manusia.
					<h4>
	</div>

	<br>
	<div class="tujuan">
		<h1>Tujuan :<h1>
				<h4>Dibidang Pendidikan dan Pengajaran
					Menghasilkan lulusan yang berkemampuan akademik tinggi, berakhlaq mulia dan berjiwa wirausaha handal
					Dibidang Penelitian
					Menghasilkan IPTEK berkualitas dalam berbagai bidang
					Dibidang Pengabdian kepada Masyarakat Mengimplementasikan IPTEK guna peningkatan kualitas sumber daya manusia dan sumber daya alam
					<h4>
	</div>

</div>
</center>
<?php echo $this->endSection() ?>