<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNWAHA</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <!-- JQUERY -->
    <script src="<?= base_url('assets/lib/jquery/jquery.min.js') ?>"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap');

        .konten {
            min-height: 100vh !important;
        }

        :root {
            --bgnav: #232cc2
        }

        .bgku {
            background-color: var(--bgnav) !important;
        }

        .navbar-brand img {
            width: 120px;


        }

        .nav-item .nav-link {
            text-transform: uppercase;
            font-family: 'Rubik' !important;
            font-size: 13px !important;
            letter-spacing: 1.1px;
            font-weight: 500;
        }

        .fa-instagram {
            color: violet;
        }

        .fa-facebook {
            color: #0099ff;
        }

        .fa-whatsapp {
            color: #0f0;
        }

        .bg-ngambang {
            /* background-image: url(<?= base_url('assets/img/bg.jpg') ?>); */
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;

        }

        @media screen and (max-width:768px) {
            #menu1 {
                display: none
            }
        }

        #menu_atas {
            font-size: 13px;
        }
    </style>

</head>

<body class="bg-ngambang">
    <div class="bg-dark" id="menu_atas">
        <div class="container d-flex">
            <ul class="nav justify-content-start me-auto" id="menu1">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Calon Mahasiswa</a>
                </li>
            </ul>

            <ul class="nav justify-content-end ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fab fa-whatsapp"></i><span id="menu1"> 085973817678</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fab fa-instagram"></i></a>
                </li>

            </ul>
        </div>
    </div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bgku">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/lgo1.png') ?>" alt=""></a>
            <button class="navbar-toggler d-lg-none shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url() ?>">HOME</a></li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFIL</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('visimisi') ?>">Visi Misi</a>
                            <a class="dropdown-item" href="<?= base_url('struktur') ?>">Struktur Organisasi</a>
                            <a class="dropdown-item" href="<?= base_url('data_dosen') ?>">Dosen dan Staff</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ORGANISASI</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <!-- <a class="dropdown-item" href="<?= base_url('yayasan') ?>">Yayasan</a> -->
                            <!-- <a class="dropdown-item" href="<?= base_url('pimpinan_fakultas') ?>">Pimpinan Fakultas</a> -->
                            <a class="dropdown-item" href="<?= base_url('bem') ?>">BEM</a>
                            <a class="dropdown-item" href="<?= base_url('ukm') ?>">UKM</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fakultas</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('fakultas') ?>">Data Fakultas</a>
                            <a class="dropdown-item" href="<?= base_url('prodi') ?>">Data Prodi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AKADEMIK</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('kalender') ?>">Kalender Akademik</a>
                            <a class="dropdown-item" href="<?= base_url('kalenderakademik') ?>">Kurikulum Pembelajaran</a>
                            <a class="dropdown-item" href="<?= base_url('jadwal_perkulian') ?>">Jadwal Perkuliahan</a>
                            <a class="dropdown-item" href="<?= base_url('info_beasiswa') ?>">Info Beasiswa</a>
                            <a class="dropdown-item" href="<?= base_url('seminar') ?>">Info Seminar</a>
                            <a class="dropdown-item" href="<?= base_url('peraturan') ?>">Peraturan Perkuliahan</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('perpus') ?>">Perpustakaan</a>
                            <a class="dropdown-item" href="<?= base_url('fasilitas') ?>">Fasilitas Lainnya</a>
                            <!-- <a class="dropdown-item" href="<?= base_url('lab_bahasa') ?>">Lab Bahasa</a>
                            <a class="dropdown-item" href="<?= base_url('lab_komputer') ?>">Lab Komputer</a>
                            <a class="dropdown-item" href="<?= base_url('kantin') ?>">Kantin</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan Aplikasi</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('pmb') ?>">PMB</a>
                            <a class="dropdown-item" href="<?= base_url('jurnal') ?>">E-JOURNAL</a>
                            <a class="dropdown-item" href="<?= base_url('alumni') ?>" target="_blank">TRACER STUDY</a>
                            <a class="dropdown-item" href="<?= base_url('pengajuan_ta') ?>">PENGAJUAN TA</a>
                            <a class="dropdown-item" target="_blank" href="<?= base_url('alumni') ?>">Alumni</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link text-white" href="<?= base_url('nilai') ?>">Nilai Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->


    <!-- MAIN CONTENT RENDER -->
    <?php
    echo $this->renderSection('content');
    ?>
    <!-- END CONTENT RENDER -->

    <footer class="bg-dark">
        <div class="container">
            <div class="py-3 text-center text-white"><span>Copyright &#169; Naufal - 2023</span></div>
        </div>
    </footer>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>