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
        <div class="col-3">
            <img src="<?= base_url('assets/img_dinda/5.JPG') ?>" class="card-img-top" style="height:220px; width: 310px;" alt="...">
        </div>

        <div class="col-3">
            <img src="<?= base_url('assets/img_dinda/6.JPG') ?>" class="card-img-top" style="height:220px; width: 310px;" alt=" ...">
        </div>
        <div class="col-3">
            <img src="<?= base_url('assets/img_dinda/7.JPG') ?>" class="card-img-top" style="height:220px; width: 310px;" alt=" ...">
        </div>
        <div class="col-3">
            <img src="<?= base_url('assets/img_dinda/9.JPG') ?>" class="card-img-top" style="height:220px; width: 310px;" alt=" ...">
        </div>
    </div>
</div>
</div>


<?php echo $this->endSection() ?>