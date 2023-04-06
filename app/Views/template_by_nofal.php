<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNWAHA</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="<?= base_url('assets/lib/jquery/jquery.min.js') ?>" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


    <style>
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
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('') ?>">Profil</a>
                            <a class="dropdown-item" href="<?= base_url() ?>">###</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Unwaha</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="<?= base_url('') ?>">Profil</a>
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
    <!-- END NAVBAR -->


    <!-- MAIN CONTENT RENDER -->
    <div class="">
        <?php
        echo $this->renderSection('content');
        ?>
    </div>
    <!-- END CONTENT RENDER -->

    <footer class="bg-dark">
        <div class="container">
            <div class="py-3 text-center text-white"><span>Copyright &#169; Naufal - 2023</span></div>
        </div>
    </footer>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>