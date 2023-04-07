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
        td:first-child {
            text-align: center;
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
        <table class="table table-bordered table-striped">
            <thead class="table-primary text-center">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>FAKULTAS</th>
                    <th>PRODI</th>
                    <th>JABATAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1101042221</td>
                    <td>Brian Domani</td>
                    <td>FTI</td>
                    <td>INFORMATIKA</td>
                    <td>KETUA</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1101042212</td>
                    <td>Razor</td>
                    <td>FTI</td>
                    <td>SISTEM INFORMASI</td>
                    <td>SEKERTARIS</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>8819021115</td>
                    <td>Jack Sparow</td>
                    <td>FIP</td>
                    <td>PENDIDIKAN FISIKA</td>
                    <td>BENDAHARA</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>1201021889</td>
                    <td>Conjurer</td>
                    <td>FE</td>
                    <td>MANAJEMEN</td>
                    <td>WAKIL BENDAHARA</td>
                </tr>
            </tbody>
        </table>
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