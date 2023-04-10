<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>

<div class="card text-white bg-primary">
    <div class="card-body">
        <h4 class="card-title text-center">GALLERY UNWAHA</h4>
    </div>
</div>
<br>
<div class="container" style="min-height: 100vh;">
    <div class="row">
        <div class="col-4">
            <img src="<?= base_url('assets/img_dinda/1.jpg') ?>" class="card-img-top" alt="...">
        </div>
        <div class="col-4">
            <img src="<?= base_url('assets/img_dinda/2.jpg') ?>" class="card-img-top" alt="...">
        </div>
        <div class="col-4">
            <img src="<?= base_url('assets/img_dinda/3.jpg') ?>" class="card-img-top" alt="...">
        </div>
    </div>
</div>
</div>

<?php echo $this->endSection() ?>