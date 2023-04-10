<?php 
  // koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "db_mhs");
  // ambil data
    $result = mysqli_query($db, "SELECT * FROM ifb_mhs")
  // ambil data dari result


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<body>
    
</body>
</html>

<table>
  <tr>
    <th>NO</th>
    <th>KODE MK</th>
    <th>MATA KULIAH</th>
    <th>SKS</th>
    <th>JADWAL</th>
    <th>DOSEN</th>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result) ) : ?>
  <tr>
    <td><?= $row["id2"]; ?></td>
    <td><?= $row["KODE MK2"]; ?></td>
    <td><?= $row["MATA KULIAH2"]; ?></td>
    <td><?= $row["SKS2"]; ?></td>
    <td><?= $row["JADWAL2"]; ?></td>
    <td><?= $row["DOSEN2"]; ?></td>
  </tr>
  <?php endwhile; ?>
</table>