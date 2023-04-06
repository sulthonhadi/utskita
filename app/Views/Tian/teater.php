<!doctype html> 
<html lang="en"> 
 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
 <title>Teater</title> 
 

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 

 
</head> 
 
<body> 


<div class="container mt-5">
  <h2 class="text-center mb-5 ">Daftar Anggota UKM Teater</h2>
  <?php
    $siswa = [
      [
        'id' => '1', 'nim' => '30300167', 'namasiswa' => 'Muhammad Abqari', 'prodi' => 'Sistem Informasi', 'fakultas' => 'FTI', 'jabatan' => 'Ketua'
      ],
      [
        'id' => '2', 'nim' => '30300168', 'namasiswa' => 'Muhammad Amartya', 'prodi' => 'Sistem Informasi', 'fakultas' => 'FTI', 'jabatan' => 'Wakil ketua'
      ],
      [
        'id' => '3', 'nim' => '30300169', 'namasiswa' => 'Muhammad Bima', 'prodi' => 'Sistem Informasi', 'fakultas' => 'FTI', 'jabatan' => 'Sekretaris'
      ],
      [
        'id' => '4', 'nim' => '303001470', 'namasiswa' => 'Muhammad Bahiga', 'prodi' => 'Sistem Informasi', 'fakultas' => 'FTI', 'jabatan' => 'Anggota'
      ],
      [
        'id' => '5', 'nim' => '303001471', 'namasiswa' => 'Muhammad Evan', 'prodi' => 'Sistem Informasi', 'fakultas' => 'FTI', 'jabatan' => 'Anggota'
      ],
      [
        'id' => '6', 'nim' => '303001472', 'namasiswa' => 'Gina Wastuti', 'prodi' => 'Sistem Informasi', 'fakultas' => 'FTI', 'jabatan' => 'Anggota'
      ]
    ];
  ?>

  <table class="table table-bordered">
    <thead style="background-color:#007bff;color:white;">
      <tr class="text-center">
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Fakultas</th>
        <th>jabatan</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($siswa as $mahasiswa) {
      ?>
      <tr class="text-center">
      <td><?php echo $mahasiswa['id'] ?></td>
        <td><?php echo $mahasiswa['nim'] ?></td>
        <td><?php echo $mahasiswa['namasiswa'] ?></td>
        <td><?php echo $mahasiswa['prodi'] ?></td>
        <td><?php echo $mahasiswa['fakultas'] ?></td>
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