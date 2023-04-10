<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<div class="card text-white bg-primary">
    <div class="card-body">
        <h4 class="card-title text-center">GALLERY UNWAHA</h4>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-6">

            <div class="card mb-3">
                <img src="<?= base_url('assets/img/9.JPG') ?>" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: blue;">
                    <h5 class="card-title text-white">OSFAK</h5>
                    <p class="card-text text-white">Orientasi Fakultas Teknologi Informatika Tahun 2022</p>
                    <p class="card-text text-white"><small>Last updated 7 months ago</small></p>
                    <a href="<?= base_url('prak') ?>" class="text-white">see more</a>
                </div>

            </div>
        </div>
        <div class="col-6">
            <img src="<?= base_url('assets/img/2.jpg') ?>" class="card-img-top" alt="...">
            <div class="card-body" style="background-color: blue;">
                <h5 class="card-title text-white">STUDENT EXCHANGE</h5>
                <p class="card-text text-white">Student Exchange UNWAHA Jombang Go International University</p>
                <p class="card-text text-white"><small>Last updated 1 months ago</small></p>
                <a href="<?= base_url('pr') ?>" class="text-white">see more</a>
            </div>

        </div>
    </div>
</div>
</div>

<?php echo $this->endSection() ?>