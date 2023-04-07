<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>

<style>
    .hehe {
        width: 150px;
        height: 150px;
    }
</style>

<div class="container row mx-5 justify-content-center">
    <h2 class="text-primary text-center">Koleksi Buku</h2>
    <p class="text-center">Koleksi-koleksi kami yang dibaca oleh banyak pengunjung perpustakaan. Cari. Pinjam. Kami harap Anda menyukainya
    </p>
    <a class="btn btn-outline-primary m-2" style="width: 150px; height: 40px;">Bahasa</a><br>
    <a class="btn btn-outline-primary m-2" style="width: 150px; height: 40px;">Sejarah Islam</a><br>
    <a class="btn btn-outline-primary m-2" style="width: 150px; height: 40px;">Psikologi</a><br>
    <a class="btn btn-outline-primary m-2" style="width: 150px; height: 40px;">Bisnis</a><br>
</div>

<div class="container">
    <div class="row mt-1 justify-content-center ">
        <div class="col-sm-3 ">
            <div class="card mt-4 text-center" style="width: 230px; height: 270px;">
                <div class="card_body mt-4">
                    <img class="hehe" src="https://tse2.mm.bing.net/th?id=OIP.lZI9_hw8oPs5W5oqn5tnpwHaKf&pid=Api&P=0" alt="" srcset="">
                    <p>Sejarah Peradaban islam</p>
                    <p>sofyan rofi,S.pd.i </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="card mt-4 text-center" style="width: 230px; height: 270px;">
                <div class="card_body mt-4">
                    <img class="hehe" src="https://tse1.mm.bing.net/th?id=OIP.r7as_twINQ3yWo8-28JlEwAAAA&pid=Api&P=0" alt="" srcset="">
                    <p>Oxford practice Grammar</p>
                    <p>John Eastwood</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="card  mt-4 text-center" style="width: 230px; height: 270px;">
                <div class="card_body mt-4">
                    <img class="hehe" src="https://tse4.mm.bing.net/th?id=OIP.oDLajMx-sW2N3wEmw_pzYQHaLD&pid=Api&P=0" alt="" srcset="">
                    <p>Psikologi Pendidikan</p>
                    <p>Andi Thahir, ed.D</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="card mt-4 text-center" style="width: 230px; height: 270px;">
                <div class="card_body mt-4">
                    <img class="hehe" src="http://penerbitbukudeepublish.com/wp-content/uploads/2018/01/Pengantar-Bisnis-Convert-ISBN-ebook-depan.jpg" alt="" srcset="">
                    <p>Pengantar Bisnis</p>
                    <p>Sattar S.E,. M.Si </p>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary ">load more</a>

</div>


<h2 class="text-center text-primary mt-4">Fasilitas Perpustakaan</h2>

<div class="container mt-4">
    <div class="row mt-1 justify-content-center ">
        <div class="col-sm-3 ">
            <div class="card card-center border-secondary" style="width: 250px; height: 100px;">
                <div class="card-body">
                    <i class="fa-sharp fa-solid fa-table " style="font-size: 30px;"></i>
                    <p class="card-text">Meja Informasi</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="card card-center border-secondary" style="width: 250px; height: 100px;">
                <div class="card-body">
                    <i class="fa-sharp fa-solid fa-people-roof" style="font-size: 30px;"></i>
                    <p class="card-text">Area Belajar</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="card card-center border-secondary" style="width: 250px; height: 100px;">
                <div class="card-body">
                    <i class="fa-sharp fa-solid fa-boxes-stacked" style="font-size: 30px;"></i>
                    <p class="card-text">Loker</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="card card-center border-secondary" style="width: 250px; height: 100px;">
                <div class="card-body">
                    <i class="fa-sharp fa-solid fa-chalkboard-user" style="font-size: 30px;"></i>
                    <p class="card-text">Layanan Teknologi Informasi</p>
                </div>
            </div>
        </div>
    </div>
</div>

	<footer class="bg-dark text-white mt-5">
		<div class="row">
			<div class="col-sm-4 mt-3">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.500160854389!2d112
				.23013391415135!3d-7.520294576291567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2
				e783fe13394c7d1%3A0xc62ce7791d01c2cd!2sUniversitas%20KH.%20Abdul%20Wahab%20Hasbullah!5e0!3m2
				!1sid!2sid!4v1680853169251!5m2!1sid!2sid" 
				width="300" height="200" style="border:0; margin-left: 40px;" allowfullscreen="" 
				loading="lazy" referrerpolicy="no-referrer-when-downgrade">
			</iframe>
			
			</div>
			<div class="col-sm-4 mt-3">
				<h4>Layanan online </h4>
				<p><i class="fas fa-book-reader"></i> SIA (Sistem Informasi Akademik)</p>
				<p><i class="fas fa-book-reader"></i> Elearning</p>
				<p><i class="fas fa-book-reader"></i> Perpustakaan Online</p>
				<p><i class="fas fa-book-reader"></i> PMB </p>
				<p><i class="fas fa-book-reader"></i> Tracer Study</p>
			</div>
			<div class="col-sm-4 mt-3">
			<h4>Layanan Publikasi </h4>
				<p><i class="fas fa-book"></i> Jurnal 1 (ejournal)</p>
				<p><i class="fas fa-book"></i> Jurnal 2 (ojs)</p>
			</div>
		</div>
		<div class="fw-bold bg-success text-white" style="min-height: 50px !important;">
	<hr>
		<p class="text-center">Copyright &#169; 2023 Wilujeng Amalia</p>
	</div>
	</footer>


<?php echo $this->endSection() ?>