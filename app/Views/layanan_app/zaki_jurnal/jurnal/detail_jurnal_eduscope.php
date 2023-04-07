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
                    <img class="card-img-top" src="<?= base_url('assets/img/eduscope.jpg') ?>" alt="Title">
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
                Vol. 8 No. 2 (2023): Volume 8 No. 2 Januari 2023
            </h5>
            <p>

            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/eduscope/article/view/3362/1544" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>