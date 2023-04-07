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
                    <img class="card-img-top" src="<?= base_url('assets/img/jumat_pertanian.jpg') ?>" alt="Title">
                    <div class="card-body">
                        <p class="card-title">
                            Jumat Pertanian: Jurnal Pengabdian Masyarakat
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
                JUMAT PERTANIAN: JURNAL PENGABDIAN MASYARAKAT adalah Jurnal ilmiah yang mewadahi hasil kegiatan pengabdian kepada masyarakat bidang pertanian yang diterbitkan oleh Lembaga penelitian dan pengabdian masyarakat (LPPM) Universitas KH. A. Wahab Hasbullah (UNWAHA)
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/abdimasper/article/view/2920/1442" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>