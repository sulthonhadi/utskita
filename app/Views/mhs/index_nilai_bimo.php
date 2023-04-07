<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Mahasiswa</title>
</head>

<body>

  <nav>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Tentang</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
    Tabel Mahasiswa
  </nav>

  <?php
  $mhs = array(
    array('1', 'Eren Yeager', 'paradise', 'rumblling'),
    array('2', 'Mikasa Ackerman', 'paradise', 'army'),
    array('3', 'Armin Arlrt', 'paradise', 'army'),
    array('4', 'Annie leonhart', 'paradise', 'army'),
    array('5', 'Hanji zoe', 'paradise', 'army'),
    array('6', 'Levi Ackerman', 'paradise', 'army'),
    array('7', 'Jean Kristein', 'paradise', 'army'),
    array('8', 'Connie Springer', 'paradise', 'army'),
    array('9', 'Reiner Braun', 'paradise', 'army'),
    array('10', 'Erwin Smith', 'paradise', 'army'),
    array('11', 'bertolt Hoover', 'paradise', 'army'),
  )
  ?>
  <center>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Nilai</th>
      </tr>

      <?php
      foreach ($mhs as $animek) {
        echo "<tr>";
        echo "<td>" . $animek[0] . "</td>";
        echo "<td>" . $animek[1] . "</td>";
        echo "<td>" . $animek[2] . "</td>";
        echo "<td>" . $animek[3] . "</td>";
        echo "<td>" . '<button class="button"><a href="https://khusaladaora.000webhostapp.com/ci3">Klik Saya</a></button>' . "</td>";
        echo "</tr>";
      }
      ?>
    </table>
  </center>
</body>

<style>
  table {
    border-collapse: collapse;
    margin: 20px;
    width: 80%;
  }

  /* Mengatur warna latar belakang pada header tabel */
  th {
    background-color: #f2f2f2;
  }

  /* Mengatur tampilan border pada sel tabel */
  td,
  th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  /* Mengatur tampilan hover pada baris tabel */
  tr:hover {
    background-color: #f5f5f5;
  }

  nav {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  }

  ul {
    list-style: none;
    display: flex;
  }

  li {
    margin: 0 10px;
  }

  a {
    color: #fff;
    text-decoration: none;
  }


  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
  }
</style>

</html>