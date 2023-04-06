<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blank</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icon - short-cut(bina-bsicon) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/r-2.4.0/datatables.min.css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <style>
        .box-img {
            width: 100%;
            height: 200px;
            border-radius: 5px;
            overflow: hidden;
        }

        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap');

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
            letter-spacing: 1.1px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <!-- navbar start (navbar mengikuti navbar homepage agar selaras) -->
    <nav class="navbar navbar-expand-sm navbar-dark bgku">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/lgo1.png') ?>" alt=""></a>
            <button class="navbar-toggler d-lg-none shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Unwaha</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url() ?>">Visi</a>
                            <a class="dropdown-item" href="<?= base_url() ?>">Misi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akademik</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url() ?>">Action 1</a>
                            <a class="dropdown-item" href="<?= base_url() ?>">Action 2</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fakultas</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url() ?>">Action 1</a>
                            <a class="dropdown-item" href="<?= base_url() ?>">Action 2</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url() ?>">Action 1</a>
                            <a class="dropdown-item" href="<?= base_url() ?>">Action 2</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- tampil jurnal -->
    <div class="container mt-3">
        <div class="row gx-2 gy-3 mb-3">
            <!-- jurnal DINAMIKA : Jurnal Kajian Pendidikan dan Keislaman start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/3/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            DINAMIKA : Jurnal Kajian Pendidikan dan Keislaman
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2022-12-14</p>
                    </div>
                </div>
            </div>
            <!-- DINAMIKA : Jurnal Kajian Pendidikan dan Keislaman end -->

            <!-- EDUSCOPE: Jurnal Pendidikan start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/2/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            EDUSCOPE: Jurnal Pendidikan..</h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0"> 2022-22-14</p>
                    </div>
                </div>
            </div>
            <!-- EDUSCOPE: Jurnal Pendidikan end -->

            <!-- SAINTEKBU start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/1/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold text-truncate">
                            SAINTEKBU
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0"> 2023-01-05</p>
                    </div>
                </div>
            </div>
            <!-- SAINTEKBU end -->

            <!-- NEWTON: Networking and Information Technology start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top " src="https://ejournal.unwaha.ac.id/public/journals/20/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>

                    <div class="card-body">
                        <h6 class="fw-bold">
                            NEWTON: Networking and Information Technology
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0"> 2023-01-10</p>
                    </div>
                </div>
            </div>
            <!-- NEWTON: Networking and Information Technology end -->

            <!-- APPLICATION: Applied science in Learning Research start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top " src="https://ejournal.unwaha.ac.id/public/journals/19/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            APPLICATION: Applied science in Learning Research
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0"> 2023-04-05</p>
                    </div>
                </div>
            </div>
            <!-- APPLICATION: Applied science in Learning Research end -->

            <!-- SCHOOLAR: Social and Literature Study in Education start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top " src="https://ejournal.unwaha.ac.id/public/journals/17/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            SCHOOLAR: Social and Literature Study in Education
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0"> 2022-01-05</p>
                    </div>
                </div>
            </div>
            <!-- SCHOOLAR: Social and Literature Study in Education end -->

            <!-- INCOME: Innovation of Economics and Management start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/16/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            INCOME: Innovation of Economics and Management</h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2022-11-14</p>
                    </div>
                </div>
            </div>
            <!-- INCOME: Innovation of Economics and Management end -->

            <!-- Jumat Keagamaan: Jurnal Pengabdian Masyarakat start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/15/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            Jumat Keagamaan: Jurnal Pengabdian Masyarakat
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2022-12-14</p>
                    </div>
                </div>
            </div>
            <!-- Jumat Keagamaan: Jurnal Pengabdian Masyarakat end -->

            <!-- Jumat Keagamaan: Jurnal Pengabdian Masyarakat start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/14/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            Jumat Keagamaan: Jurnal Pengabdian Masyarakat
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2022-12-14</p>
                    </div>
                </div>
            </div>
            <!-- Jumat Keagamaan: Jurnal Pengabdian Masyarakat end -->

            <!-- Jumat Pertanian: Jurnal Pengabdian Masyarakat start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/12/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            Jumat Pertanian: Jurnal Pengabdian Masyarakat
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2023-07-27</p>
                    </div>
                </div>
            </div>
            <!-- Jumat Pertanian: Jurnal Pengabdian Masyarakat end -->

            <!-- Jumat Pendidikan: Jurnal Pengabdian Masyarakat start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="<?= base_url('detailjurnal'); ?>">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/11/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            Jumat Pendidikan: Jurnal Pengabdian Masyarakat
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2022-12-13</p>
                    </div>
                </div>
            </div>
            <!-- Jumat Pendidikan: Jurnal Pengabdian Masyarakat end -->

            <!-- Multidiscipline International Conference start -->
            <div class="col-sm-2">
                <div class="card h-100">
                    <div class="box-img">
                        <a href="#">
                            <img class="card-img-top" src="https://ejournal.unwaha.ac.id/public/journals/23/journalThumbnail_en_US.jpg" alt="Title">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">
                            Multidiscipline International Conference
                        </h6>
                    </div>
                    <div class="card-footer bg-white">
                        <p class="mb-0">2022-01-14</p>
                    </div>
                </div>
            </div>
            <!-- Multidiscipline International Conference end -->
        </div>
    </div>
    <!-- tampil jurnal end -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/r-2.4.0/datatables.min.js"></script>
    <!-- Sweet Alert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
</body>
</html>