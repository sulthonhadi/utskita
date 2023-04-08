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
                    <img class="card-img-top" src="<?= base_url('assets/img/income.jpg') ?>" alt="Title">
                    <div class="card-body">
                        <p class="card-title">
                            INCOME: Innovation of Economics and Management
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
                INCOME: Innovation of Economics and Management is a scientific journal published by the Institute for Research and Community Service (LPPM), KH University. A. Wahab Hasbullah Jombang. INCOME: Innovation of Economics and Management aims to provide information from the results of research in the field of management and development.
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/jurnal_penelitian/article/view/2558/1252" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>