<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>


<?php


?>
<!-- navbar end -->
<!-- detail jurnal start -->
<div class="container mt-5 konten">
    <div class="row">
        <div class="col-sm-2">
            <h5>
                Current Issue
            </h5>
            <div>
                <div class="card">
                    <img class="card-img-top" src="<?= base_url('assets/img/aplications.jpg') ?>" alt="Title">
                    <div class="card-body">
                        <p class="card-title">
                            DINAMIKA : Jurnal Kajian Pendidikan dan Keislaman
                        </p>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h5>
                APPLICATION: Applied science in Learning Research
            </h5>
            <p>
                APPLICATION: Applied science in Learning Research is a scientific journal published by the Institute for Research and Community Service (LPPM), KH University. A. Wahab Hasbullah Jombang. APPLICATION: Applied science in Learning Research aims to provide information from results of applied research in the field of education. results of applied research in the field of education. Educational development, application of learning models and media.
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/application/article/view/1903/1541" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>