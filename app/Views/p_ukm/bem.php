<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blank</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h2 class="text-center mb-5">Biodata Anggota BEM</h2>
        
        <?php
        $siswa = [
            [
                'id' => '1', 'nim' => '220342112', 'nama' => 'Hadi', 'ttl' => '2001-07-31', 'jeniskelamin' => 'Laki - Laki', 'agama' => 'Islam', 'prodi' => 'Informatika', 'fakultas' => 'Teknologi Informasi', 'alamat' => 'Jombang', 'jabatan' => 'ketua'
            ],
            [
                'id' => '2', 'nim' => '228974632', 'nama' => 'Rizuki', 'ttl' => '2003-05-19', 'jeniskelamin' => 'Laki - Laki', 'agama' => 'Islam', 'prodi' => 'Informatika', 'fakultas' => 'Teknologi Informasi', 'alamat' => 'Jombang', 'jabatan' => 'sekretaris'
            ],
            [
                'id' => '3', 'nim' => '222254212', 'nama' => 'Supri', 'ttl' => '2001-08-16', 'jeniskelamin' => 'Laki - Laki', 'agama' => 'Islam', 'prodi' => 'Informatika', 'fakultas' => 'Teknologi Informasi', 'alamat' => 'Jombang', 'jabatan' => 'bendahara'
            ],
        ]
        ?>

        <table class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>TTL</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>PRODI</th>
                        <th>FAKULTAS</th>
                        <th>ALAMAT</th>
                        <th>JABATAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($siswa as $mahasiswa) {
                    ?>
                        <tr class="text-center">
                            <td><?php echo $mahasiswa['id'] ?></td>
                            <td><?php echo $mahasiswa['nim'] ?></td>
                            <td><?php echo $mahasiswa['nama'] ?></td>
                            <td><?php echo $mahasiswa['ttl'] ?></td>
                            <td><?php echo $mahasiswa['jeniskelamin'] ?></td>
                            <td><?php echo $mahasiswa['agama'] ?></td>
                            <td><?php echo $mahasiswa['prodi'] ?></td>
                            <td><?php echo $mahasiswa['fakultas'] ?></td>
                            <td><?php echo $mahasiswa['alamat'] ?></td>
                            <td><?php echo $mahasiswa['jabatan'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>