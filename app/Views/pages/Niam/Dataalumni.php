<!doctype html>
<html lang="en">

<head>
    <title>Alumni Data Unwaha</title>
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

        .cari:hover {
            color: white !important;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Form Pengguna Lulusan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- NAVBAR END -->


    <!-- content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <h1> Filter Data Alumni</h1>
                <p class="mb-3">Sebelum mengisi data Tracer, maka langkah yang dapat dilakukan adalah mengisi keyword berupa pada isian disamping untuk memunculkan data alumni yang diinginkan. Keyword dapat berupa:</p>
                <p><i class="fas fa-check text-info"></i>&nbsp;<span class="fw-bold"> NIM : </span> <span class="text-secondary">(Contoh : 220204****)</span></p>
                <p><i class="fas fa-check text-info"></i>&nbsp;<span class="fw-bold"> Nama : </span> <span class="text-secondary">(Contoh : Teguh)</span></p>
            </div>

            <div class="col-sm-6 mt-4">
                <form class="d-flex w-100">
                    <div class="form-floating w-100 mb-3">
                        <input type="email" class="form-control w-100" id="floatingInput" placeholder="Keyword Pencarian" required>
                        <label for="floatingInput">Cari Keyword Disini</label>
                        <small id="helpId" class="form-text text-muted">Harap Isi Bidang Ini</small>
                    </div>
                </form>
                <button class="cari btn btn-outline-info mt-3 rounded-pill w-100" style="min-height: 50px;" type="submit">Cari Alumni</button>
            </div>
        </div>


        <div class="table-responsive mt-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">NIM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Riyan</td>
                        <td>INFORMATIKA</td>
                        <td>Teknologi Informasi</td>
                        <td>2009</td>
                        <td>2202041105</td>
                    </tr>
                    <tr class="">
                        <td scope="row">2</td>
                        <td> Munir</td>
                        <td>Agrobisnin</td>
                        <td>Pertanian</td>
                        <td>2009</td>
                        <td>2202021102</td>
                    </tr>
                    <tr class="">
                        <td scope="row">3</td>
                        <td>Rizky</td>
                        <td>Sistem Informasi</td>
                        <td>Teknologi Informasi</td>
                        <td>2010</td>
                        <td>2202051101</td>
                    </tr>
                    <tr class="">
                        <td scope="row">4</td>
                        <td>Imam</td>
                        <td>Manajemen</td>
                        <td>Ekonomi</td>
                        <td>2010</td>
                        <td>2202081110</td>
                    </tr>
                    <tr class="">
                        <td scope="row">5</td>
                        <td>Naufal</td>
                        <td>Pendidikan Bahasa Inggris</td>
                        <td>Pendidikan</td>
                        <td>2011</td>
                        <td>2202011121</td>
                    </tr>
                    <tr class="">
                        <td scope="row">6</td>
                        <td>Budi</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>Pendidikan</td>
                        <td>2011</td>
                        <td>2202021111</td>
                    </tr>
                </tbody>
            </table>
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