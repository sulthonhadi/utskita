
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Perkuliahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('');?>sistem/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<nav class="navbar bg-body-tertiary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('');?>sistem/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-center">
      SIA-UNWAHA
    </a>
  </div>
</nav>

<nav>
<div class="kiri container-fluid">
    <div class="row">
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
        <div class="mt-4">
                <a href="http://localhost/uts/" class="text-white text-decoration-none d-flex align-items-center ms-4 " role="button">
                        <span class="fs-5">JADWAL KULIAH</span>
                    </a>
                    <hr class="text-white"/>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                                <i class="fa-solid fa-calendar"></i>
                                <span class="ms-2">Kalender Akademik</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fa-regular fa-calendar-days"></i>
                                <span class="ms-2">Kurikulum</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa-sharp fa-solid fa-bookmark"></i>
                                <span class="ms-2">Jadwal Perkuliahan</span>
                            </a>
                        
                    <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                            <a href="http://localhost/uts/" class="nav-link text-white" aria-current="page">IF-A</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/uts/index.php/welcome/ifb" class="nav-link text-white" aria-current="page">IF-B</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">SI-A</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">SI-B</a>
                        </li>
                    </ul>
                    <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fa-solid fa-graduation-cap"></i>
                                <span class="ms-2">Info Beasiswa</span>
                            </a>
                        </li>
                        </li> 
                    </ul>  
            </div>
            <div>
                </div>
            </div>
        </div>
    </div>
</div>
</nav>

<div class="oy mt-2">
    <h2>Jadwal Perkuliahan</h2>
    <div class="pejoy d-flex">
    <div class="dropdown first ">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Tahun Akademik
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Semester Ganjil Tahun 2023/2024</a></li>
    <li><a class="dropdown-item" href="#">Semester Genap Tahun 2023/2024</a></li>
  </ul>
    </div>

    <di class="second dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Fakultas
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://localhost/uts/">FTI</a></li>
    <li><a class="dropdown-item" href="<?php echo base_url('');?>welcome/kedua">FAI</a></li>
    <li><a class="dropdown-item" href="<?php echo base_url('');?>welcome/ketiga">FP</a></li>
    <li><a class="dropdown-item" href="<?php echo base_url('');?>welcome/keempat">FE</a></li>
    <li><a class="dropdown-item" href="<?php echo base_url('');?>welcome/kelima">FIP</a></li>
  </ul>
  </di>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>