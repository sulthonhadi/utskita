<?php 
  // koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "db_mhs");
  // ambil data
    $result = mysqli_query($db, "SELECT * FROM ifa_mhs")
  // ambil data dari result



?>

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
    <td><?= $row["id"]; ?></td>
    <td><?= $row["KODE MK"]; ?></td>
    <td><?= $row["MATA KULIAH"]; ?></td>
    <td><?= $row["SKS"]; ?></td>
    <td><?= $row["JADWAL"]; ?></td>
    <td><?= $row["DOSEN"]; ?></td>
  </tr>
  <?php endwhile; ?>
</table>