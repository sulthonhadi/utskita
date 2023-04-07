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
        #li {

            border: 1px solid black;
            border-right: 0px;
            border-top: 0px;
            border-bottom: 0px;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        #li::before {
            content: '.';
            width: 25px;
            height: 25px;
            display: block;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            z-index: 1;
            /* left: 131px; */
            border: 1px solid black;
            transform: translateX(-33px);
        }


        ul {
            list-style: none;
        }

        .card-body img {
            width: 130px;
            height: auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand ms-3" href="<?= base_url('/') ?>">PMII</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/page2') ?>">Data Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/page3') ?>">Struktur</a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="container mt-5">
        <ul>
            <li class="w-50 mx-auto" id="li">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <img src="<?= base_url('assets/img/images1.png') ?>" alt="">
                        <div class="ms-5">
                            <h4 class="text-success">Ketua PMII</h4>
                            <h5>Nama : Brian Domani</h5>
                            <p class="mb-0 fw-bold">Prodi : Informatika</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="w-50 mx-auto" id="li">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <img src="<?= base_url('assets/img/image2.jpeg') ?>" alt="">
                        <div class="ms-5">
                            <h4 class="text-success">Sekertaris</h4>
                            <h5>Nama : Razor </h5>
                            <p class="mb-0 fw-bold">Prodi : Sistem Informasi</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="w-50 mx-auto" id="li">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <img src="<?= base_url('assets/img/images3.jpg') ?>" alt="">
                        <div class="ms-5">
                            <h4 class="text-success">Bendahara</h4>
                            <h5>Nama : Jack Sparow</h5>
                            <p class="mb-0 fw-bold">Prodi : Pendidikan Fisika</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="w-50 mx-auto" id="li">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <img src="<?= base_url('assets/img/images4.jpg') ?>" alt="">
                        <div class="ms-5">
                            <h4 class="text-success">Wakil Bendahara</h4>
                            <h5>Nama : Conjurer</h5>
                            <p class="mb-0 fw-bold">Prodi : Manajemen</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/r-2.4.0/datatables.min.js"></script>
    <!-- Sweet Alert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <!-- <script> 
 $$('#select-field').select2({ 
 theme: 'bootstrap-5' 
 }); 
 </script> -->
</body>

</html>