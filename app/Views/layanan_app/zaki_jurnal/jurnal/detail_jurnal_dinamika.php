<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>


<?php


?>
<!-- navbar end -->
<!-- detail jurnal start -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-2">
            <h5>
                Current Issue
            </h5>
            <div>
                <div class="card">
                    <img class="card-img-top" src="<?= base_url('assets/img/1.png') ?>" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Judul Jurnal</h4>
                        <p class="card-text">
                            <link rel="stylesheet" href="#">drive.google.com/jurnal
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
                Dinamika diterbitkan oleh Fakultas Agama Islam dan Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) Universitas KH. A. Wahab Hasbullah Jombang. Jurnal ini ditujukan untuk mengundang para akademisi, dosen, maupun peneliti untuk berkontribusi dalam publikasi ilmiah. Dinamika memuat hasil penelitian yang meliputi pendidikan Islam, ekonomi shariah dan pemikiran Islam. Terbit dua kali dalam satu tahun, bulan Juni dan Desember. E-issn : 2548-6896
            </p>
            <a href="https://ejournal.unwaha.ac.id/index.php/dinamika/article/view/2568/1448" target="_blank">
                <div class="div btn btn-primary">
                    Klik Untuk Download Pdf
                </div>
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>