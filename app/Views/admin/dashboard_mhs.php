<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Dashboard mhs</title>

    <link href="https://binateknologi.com/tool/standart_assets/adminkit/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">



    <style>
        .hijau {
            background-color: #006400 !important;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar ">
            <div class="sidebar-content js-simplebar hijau">
                <a class="sidebar-brand">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ93m3QrVtV-z_LTpmW_LmO5GuvIeyP4XwLISge95eZA&s" width="55px" height="55px" alt="" srcset="">
                    <span class="align-middle ms-2">UNWAHA</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a class="hijau sidebar-link" href="?pdashboard_mhs=home">
                            <i class=" align-middle" data-feather="menu"></i> <span class="align-middle">Home</span>
                        </a>
                    </li>


                    <li class="sidebar-item">
                        <a class="hijau sidebar-link" href="?pdashboard_mhs=icon_list">
                            <i class=" align-middle" data-feather="menu"></i> <span class="align-middle">ICON List</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="main">
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle ">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCYTI622reSolsdmHyNKOcmY8CrpJGfU4Q2w&usqp=CAU" width="35px" height="35px" style="border-radius: 20px; border: 2px solid;" alt="" srcset="">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <span class="text-dark">nama mahasiswa</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- KONTEN -->
            <main class="content">
                <div class="container-fluid p-0">
                    <?php
                    @$pagess = $_GET['pdashboard_mhs'];

                    if (!empty($pagess)) {

                        switch ($pagess) {
                            case 'home':
                                include "pdashboard_mhs/home_mhs.php";
                                break;

                            case 'icon_list':
                                include "pdashboard_mhs/icon_list_mhs.php";
                                break;

                            default:
                                include "pdashboard_mhs/home_mhs.php";
                                break;
                        }
                    } else {
                        include "pdashboard_mhs/home_mhs.php";
                    }
                    ?>

                </div>
            </main>
            <!-- END KONTEN -->
            <!-- footer -->
            <div class="bg-dark pb-2">
                <div class="d-flex justify-content-center mx-auto bg-dark text-white" style="width: 92%;">

                    <div class="row mt-3 ">
                        <div class="col-sm-6">
                            <h4 class="fw-bold">Tentang Sistem</h4>
                            <p style="text-align: justify;">Sistem Tracer ini digunakan untuk mempermudah mahasiswa
                                Universitas KH. A. Wahab Hasbullah dalam memperoleh informasi tentang perkulahan.</p>
                        </div>
                        <div class="col-sm-6 text-center">
                            <h4 class="fw-bold ">Tautan Penting</h4>
                            <p>Situs Resmi <a href="http://unwaha.ac.id" class="text-decoration-none">unwaha.ac.id</a><br>
                                Siakad <a href="http://sia.unwaha.ac.id" class="text-decoration-none">sia.unwaha.ac.id</a><br>
                                Pembelajaran Online <a href="http://elearning.unwaha.ac.id" class="text-decoration-none">elearning.unwaha.ac.id</a>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="text-white">
                <div class="text-center text-white" style="font-size: 12px;"><span>Copyright &#169; 2023 IHSANUDDIN AQDA
                        - All right reserved</span></div>
            </div>
            <!-- Footer End -->
        </div>
    </div>

    <script src="https://binateknologi.com/tool/standart_assets/adminkit/js/app.js"></script>

</body>

</html>