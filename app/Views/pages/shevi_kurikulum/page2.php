<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>



<body class="bg-light">
    <div class="container mt-5">
        <?php
        $matkul = [
            [
                "nomor" => "1", "kode_mk" => "w.0204.2.01", "matkul" => "Basis Data 1", "sks" => "3",
            ],
            [
                "nomor" => "2", "kode_mk" => "w.0204.1.02", "matkul" => "Web 1", "sks" => "3",
            ],
            [
                "nomor" => "3", "kode_mk" => "w.0204.2.03", "matkul" => "Pengantar Manajemen", "sks" => "2",
            ],
            [
                "nomor" => "4", "kode_mk" => "w.0204.3.01", "matkul" => "Pengantar Teknologi Informasi", "sks" => "3",
            ],
            [
                "nomor" => "5", "kode_mk" => "w.0204.2.01", "matkul" => "Algoritma dan Pemrograman Dasar", "sks" => "3",
            ],
            [
                "nomor" => "6", "kode_mk" => "w.0204.1.02p", "matkul" => "Praktikum Web 1", "sks" => "2",
            ],
            [
                "nomor" => "7", "kode_mk" => "w.0204.3.02", "matkul" => "Sistem Operasi", "sks" => "3",
            ],

        ];
        $mk1 = [
            [
                "nomor" => "1", "kode_mk" => "w.0204.1.11", "matkul" => "Web 2", "sks" => "3",
            ],
            [
                "nomor" => "2", "kode_mk" => "P.0204.1.01", "matkul" => "Elektronika Dasar", "sks" => "3",
            ],
            [
                "nomor" => "3", "kode_mk" => "w.0204.1.09", "matkul" => "Statistik Deskriptif", "sks" => "2",
            ],
            [
                "nomor" => "4", "kode_mk" => "w.0204.1.12", "matkul" => "Basis Data 2", "sks" => "3",
            ],
            [
                "nomor" => "5", "kode_mk" => "w.0204.1.14", "matkul" => "Matematika Diskrit", "sks" => "3",
            ],
            [
                "nomor" => "6", "kode_mk" => "w.0204.1.07", "matkul" => "Jaringan Komputer dan Komunikasi Data", "sks" => "3",
            ],
            [
                "nomor" => "7", "kode_mk" => "w.0204.1.11P", "matkul" => "Praktikum Web 2", "sks" => "2",
            ],
            [
                "nomor" => "8", "kode_mk" => "w.0204.1.01P", "matkul" => "Praktikum Elektronika Dasar", "sks" => "2",
            ],
        ]
        ?>


        <h2 class="text-center">Data Matakuliah Prodi Informatika</h2>
        <table class="table table-bordered table-striped table-hover mt-5">
            <h3 class="text-center">Semester 1</h3>
            <thead>
                <tr class="text-center bg-info">
                    <th>Nomor</th>
                    <th>Kode MK</th>
                    <th>Matakuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($matkul as $mk) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $mk['nomor'] ?></td>
                        <td><?php echo $mk['kode_mk'] ?></td>
                        <td><?php echo $mk['matkul'] ?></td>
                        <td><?php echo $mk['sks'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <br>
        <table class="table table-bordered table-striped table-hover mt-5">
            <h3 class="text-center">Semester 2</h3>
            <thead>
                <tr class="text-center bg-info">
                    <th>Nomor</th>
                    <th>Kode MK</th>
                    <th>Matakuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($mk1 as $mk2) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $mk2['nomor'] ?></td>
                        <td><?php echo $mk2['kode_mk'] ?></td>
                        <td><?php echo $mk2['matkul'] ?></td>
                        <td><?php echo $mk2['sks'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>