<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>HOME</title>
</head>

<body>
  <style>
    body {
      background-image: url('assets/img_khoiron/bg.jpg');
    }
  </style>
  <h1>DAFTAR DOSEN</h1>
  <p>daftar penilaian dosen yang mengajar mata kuliah semester satu prodi informatika fskultas teknologi informasi di Universitas KH. A. Wahab Hasbullah</p>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark light bg-dark text-alight">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.facebook.com/profile.php?id=100080875688052">KONTAK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://khairon.ftiunwaha.my.id/">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              DAFTAR DOSEN
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs2') ?>">Primadi Airlngga, M.IT</a></li>
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs4') ?>">Ponari Isno, S.E, <S class="kom"></S></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs6') ?>">Tholib Hariono, S.Kom, M.Kom</a></li>
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs5') ?>">Sujono, M.Kom</a></li>
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs3') ?>">Achmad Agus Athok Miftachuddin, M.Kom</a></li>
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs8') ?>">Munawaran, S.Kom, M.Si</a></li>
              <li><a class="dropdown-item" href="<?= base_url('penilaianmhs7') ?>">Siti sufidah, S.Kom, M.Si</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- div -->
  <div class="container-fluid bg-black text-white" style="height: 200vh;">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img_khoiron/angkasa.jpg" class="d-block w-100" alt="asset/angkasa.jpg" style="height: 300px;">
          <div class="carousel-caption">
            <h5>UNWAHA</h5>
            <p>Universitas KH. Wahab Hasbullah Jombang</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img_khoiron/galaxy.jpg" class="d-block w-100" alt="asset/galaxy.jpg" style="height: 300px;">
          <div class="carousel-caption">
            <h5>UNWAHA</h5>
            <p>Universitas KH. Wahab Hasbullah Jombang</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img_khoiron/jagat raya.jpg" class="d-block w-100" alt="asset/jagat raya.jpg" style="height: 300px;">
          <div class="carousel-caption">
            <h5>UNWAHA</h5>
            <p>Universitas KH. Wahab Hasbullah Jombang</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row text-center align-items-center mt-4">
      <div class="col-12 text-center">
        <img src="assets/img_khoiron/pak angga.jpg" width="300px" height="300px" />
        <h2 class="mt-2">Primadi Airlngga, w M.IT</h2>
        <p>NIY=UBU.2010.01.55.201</p>
        <p>NIDN=0725068804</p>
        <p>Keterangan=Menagajar mata kuliah Bahasa pemorgaman web 1 dan bahasa pemorgaman web 2 sekaligus praktikum web 2 di fakultas teknologi informaasi Universitas KH. Wahab Hasbullah Jombang</p>
        <p>tingkat kepuasan: 100% memuaskan</p>
      </div>
    </div>
  </div>
  <!-- div end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>