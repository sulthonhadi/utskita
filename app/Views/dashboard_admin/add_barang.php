<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Koperasi</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="toggle-sidebar">
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">Anggun_uts</span>
            </a>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block " style="margin-right: 2em;">
                    <a class="btn btn-primary mr-3" href="#">
                        Jual Barang
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item d-block " style="margin-right: 2em;">
                    <a href="#" class="btn btn-primary d-block">
                        Tambah Barang
                    </a>
                </li><!-- End Search Icon-->

            </ul>
        </nav><!-- End Icons Navigation -->
    </header>
    <main id="main" class="main">
        <div class="row">
            <div class="col-12">
                <section class="section">
                    <div class="row justify-content-center">
                        <div class="col-7">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>
                                    <form method="POST" action="<?= base_url() . 'add_barang' ?>">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-4 col-form-label">Kode Barang</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="kode_barang">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-4 col-form-label">Nama Barang</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nama_barang">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-4 col-form-label">Harga Barang</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="harga_barang">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-4 col-form-label">Harga Jual</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="harga_jual">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-4 col-form-label">Stok</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="stok">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-4 col-form-label">Kategori</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="kategori">
                                            </div>
                                        </div>
                                        <div class="row mb-3">

                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>
                                    </form><!-- End General Form Elements -->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>AnggunDev</span></strong>. All Rights Reserved
        </div>
    </footer>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>