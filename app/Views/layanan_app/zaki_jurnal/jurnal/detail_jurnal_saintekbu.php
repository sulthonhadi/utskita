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
                    <img class="card-img-top" src="<?= base_url('assets/img/saintekbu.jpg') ?>" alt="Title">
                    <div class="card-body">
                        <p class="card-title">
                            Sanitekbu
                        </p>
                        <p class="card-text">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h5>
                Saintekbu
            </h5>
            <p>
                SAINTEKBU is the Journal of the Faculty of Information Technology, University of KH.A. Wahab Hasbullah Tambakberas Jombang, published periodically (once a semester), as a vehicle for scientific communication of academic people in various aspects of science and technology. The editors invite experts and academics to contribute their manuscripts, either in the form of research results, in-depth opinions, book reviews in accordance with their disciplines. The manuscript in question is original, has not been published in other media. The editor will select the manuscripts that are deemed fit to fit and have the right to edit them without losing the substance of the author's ideas.
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/saintek/article/view/3011/1508" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>