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
<?php echo $this->endSection() ?>