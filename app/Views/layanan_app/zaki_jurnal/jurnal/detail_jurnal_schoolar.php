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
                    <img class="card-img-top" src="<?= base_url('assets/img/schoolar.jpg') ?>" alt="Title">
                    <div class="card-body">
                        <p class="card-title">
                            SCHOOLAR: Social and Literature Study in Education
                        </p>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h5>
                About the Journal
            </h5>
            <p>
                SCHOOLAR: Social and Literature Study in Education is a scientific journal published by the Institute for Research and Community Service (LPPM), KH University. A. Wahab Hasbullah Jombang. SCHOOLAR: Social and Literature Study in Education aims to provide information from the results of research and literature review (non-applied) researchers who focus on education.
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/jurnal_pengabdian/article/view/1380/1457" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>