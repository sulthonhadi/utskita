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
                    <img class="card-img-top" src="<?= base_url('assets/img/newton.jpg') ?>" alt="Title">
                    <div class="card-body">
                        <p class="card-title">
                            NEWTON: Networking and Information Technology
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
                NEWTON: Networking and Information Technology is a scientific journal published by the Institute for Research and Community Service (LPPM), KH University. A. Wahab Hasbullah Jombang. The aims of the journal are to publish and disseminate high quality, original research papers and article review in the field of Information Technology, Information Systems Engineering, and Intelligent Business Systems. NEWTON: Networking and Information Technology provide platform for scientists and academics across Indonesia to promote, share, and discuss new issues and the development of information systems and information technology.
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/newton/article/view/3408/1548" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>