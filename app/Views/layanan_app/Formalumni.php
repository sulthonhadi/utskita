<!doctype html>
<html lang="en">

<head>
    <title>Form Pengguna Lulusan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        .nav-link {
            font-family: 'Poppins', sans-serif;
        }

        .container {
            font-family: Arial, Helvetica, sans-serif !important;
        }
    </style>
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('alumni') ?>">Data Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('f_alumni') ?>">Form Pengguna Lulusan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <div class="container">

        <!-- content -->
        <div class="row mt-5">
            <div class="col-sm-6">
                <h1 class="mb-3">Angket Pengguna Lulusan</h1>
                <p class="mb-3">Dimohon untuk Pengisian Data Angket Sebagai Berikut:</p>
                <p> <span class="fw-bold">Biodata Pengguna Alumni</span> merupakan biodata dari pihak yang menilai alumni Universitas KH. A. Wahab Hasbullah</p>
                <p> <span class="fw-bold"> Penilaian Alumni</span> merupakan penilaian yang dilakukan oleh pengguna alumni terhadap alumni Universitas KH. A. Wahab Hasbullah</p>
                <p> <span class="fw-bold">Prioritas Penilaian </span> merupakan urutan penilaian yang dianggap penting oleh pengguna lulusan</p>
            </div>

            <div class="col-sm-6">
                <form action="" method="post">
                    <h2>Biodata Pengguna Alumni</h2>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lembaga/Instansi/Perusahaan</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No.Telp/HP</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>

                </form>
            </div>

            <div class="row">
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="" class="form-label">Biodata Alumni</label>
                        <select class="form-select form-select-lg" name="" id="">
                            <option selected disabled>Silahkan Pilih Salah Satu</option>
                            <option value="">DANIRIYAN - INFORMATIKA</option>
                            <option value="">RIZKY - SISTEM INFORMASI</option>
                            <option value="">MUNIR - AGROBISNIS</option>
                            <option value="">IMAM - AGROTEKNO</option>
                            <option value="">LALA - MANAJEMEN</option>
                            <option value="">TEGUH - INFORMATIKA</option>
                            <option value="">BUDI - PENDIDIKAN AGAMA ISLAM</option>
                            <option value="">DZULFIKAR - PENDIDIKAN BAHASA INGGRIS</option>
                        </select>
                    </div>
                </form>
                <div class="col-sm-6">
                    <form action="" method="post">
                        <h1 class="mb-2">PENILAIAN ALUMNI</h1>
                        <div class="mb-3">
                            <label for="" class="form-label">Etika & Moral</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Wawasan Terkait dengan Bidang Pekerjaan Yang di Geluti</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kemampuan Mengembangkan Diri</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kemampuan Bekerja dalam Tim</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kemampuan Teknologi Informasi</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kemampuan Komunikasi dengan Baik</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kemampuan Bahasa Inggris</label>
                            <select class="form-select form-select-lg" name="" id="">
                                <option>Sangat Baik</option>
                                <option value="">Baik</option>
                                <option value="">Cukup</option>
                                <option value="">Kurang Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harapan Untuk Alumni</label>
                            <input type="text-area" class="form-control" style="min-height: 100px;" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>

                    </form>
                </div>
                <div class="col-sm-6">
                    <h1 class="mb-3">Prioritas Penilaian</h1>
                    <p>Silahkan urutkan daftar di bawah ini menurut Prioritas Penilaian yang anda inginkan. Gunakan Fitur Drag Drop Daftar Penilaian di bawah ini</p>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="">
                                <td scope="row">Etika & Moral</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Wawasan Terkait dengan Bidang Pekerjaan Yang di Geluti</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Kemampuan Bekerja dalam Tim </td>
                            </tr>
                            <tr class="">
                                <td scope="row">Kemampuan Mengembangkan Diri</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Kemampuan Teknologi Informasi</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Kemampuan Komunikasi dengan Baik</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Kemampuan Bahasa Inggris</td>
                            </tr>
                            </tbody>
                        </table>

                        <button class="btn btn-info text-white w-100 rounded-pill" style=" min-height:50px;">Kirim Penilaian</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content end -->

    <!-- footer -->
    <div class="bg-dark pb-3">
        <div class="d-flex justify-content-center mx-auto bg-dark text-white" style="width: 92%;">

            <div class="row mt-5 gx-5">
                <div class="col-sm-4">
                    <h4 class="fw-bold mb-3">Tentang Sistem</h4>
                    <p style="text-align: justify;">Sistem Tracer ini digunakan untuk melacak dan memonitoring Alumni-Alumni Universitas KH. A. Wahab Hasbullah yang tersebar dibeberapa daerah.</p>
                </div>
                <div class="col-sm-4">
                    <h4 class="fw-bold mb-3">Tautan Penting</h4>
                    <p>Situs Resmi <a href="http://unwaha.ac.id" class="text-decoration-none">unwaha.ac.id</a></p>
                    <p>Siakad <a href="http://sia.unwaha.ac.id" class="text-decoration-none">sia.unwaha.ac.id</a></p>
                    <p>Pembelajaran Online <a href="http://elearning.unwaha.ac.id" class="text-decoration-none">elearning.unwaha.ac.id</a></p>
                </div>
                <div class="col-sm-4 text-center">
                    <h4 class="fw-bold mb-3">Media Sosial</h4>

                    <div class="text-primary" style="font-size: 40px;">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-white">
        <div class="text-center text-white" style="font-size: 12px;"><span>Copyright &#169; 2023 Muhammad Husnun Ni'am - All right reserved</span></div>
    </div>
    <!-- Footer End -->




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>