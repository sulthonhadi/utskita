<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>

<!-- Your Home Code Here  -->

<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/1.png') ?>" class="w-100 d-block" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/2.png') ?>" class="w-100 d-block" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/3.png') ?>" class="w-100 d-block" alt="First slide">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container my-5">
    <h1 class="text-center mb-5">KENAPA PILIH UNWAHA? </h1>
    <div class="row g-5">
        <div class="col-sm-4">
            <h3 class="text-center">PTS Terbaik</h3>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque eum ut hic, tempore enim facilis illum sed provident sapiente? Nam nulla reiciendis quas sapiente doloribus. Consequuntur quae neque ipsam rerum?</p>
        </div>
        <div class="col-sm-4">
            <h3 class="text-center">Sertifikat ISO</h3>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque eum ut hic, tempore enim facilis illum sed provident sapiente? Nam nulla reiciendis quas sapiente doloribus. Consequuntur quae neque ipsam rerum?</p>
        </div>
        <div class="col-sm-4">
            <h3 class="text-center">Akreditasi Nasional</h3>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque eum ut hic, tempore enim facilis illum sed provident sapiente? Nam nulla reiciendis quas sapiente doloribus. Consequuntur quae neque ipsam rerum?</p>
        </div>
    </div>
</div>


<!-- SECTION ARTIKEL  -->
<div class="py-5" style="background-color: var(--bgnav);">

    <div class="container">
        <div class="row g-5">
            <div class="col-sm-4 py-5 rounded-2">
                <h4 class="text-center text-white mb-4">Berita Kampus</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">PKKMB Telah Dibuka</h5>
                            <small>1 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Prestasi Gemilang</h5>
                            <small>4 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Raih Juara 1 dalam lomba robotic</h5>
                            <small>7 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 py-5">
                <h4 class="text-center text-white mb-4">Event</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">PKKMB Telah Dibuka</h5>
                            <small>1 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Prestasi Gemilang</h5>
                            <small>4 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Raih Juara 1 dalam lomba robotic</h5>
                            <small>7 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 py-5 rounded-2">
                <h4 class="text-center text-white mb-4">Pengumuman</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">PKKMB Telah Dibuka</h5>
                            <small>1 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Prestasi Gemilang</h5>
                            <small>4 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Raih Juara 1 dalam lomba robotic</h5>
                            <small>7 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-success">read more</small>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- End Your Home Code Here  -->


<?php echo $this->endSection() ?>