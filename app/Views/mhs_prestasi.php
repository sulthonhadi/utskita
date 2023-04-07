<?php
// Array of student data
$mhs = array(
  array("1","2436787", "Nasywadia Azharin", "Pendidikan Bahasa Arab - FAI", "Lomba Pidato Bahasa Arab - UIN Tulungagung","Juara 1","Kabupaten","2019"),
  array("2", "6517267", "Nur Azizah Maulida", "Pendidikan Bahasa Arab - FAI","Lomba Arabic Languange - Mojokerto","Juara 1","Kabupaten","2018"),
  array("3", "7675454", "Fateh Al Asyari", "Pendidikan Agama Islam - FAI","Lomba Dai Kemenag Jombang","Juara 1","Kabupaten","2019"),
  array("4", "51761864", "Nadia Putri Rahmananda", "Ekonomi Syariah - FAI","Kompetisi Ekonomi Syariah - Surabaya","Juara 2","Kabupaten","2018"),
  array("5", "62786289", "Novi Agustin", "Informatika - FTI","Informatics Competition Surabaya","Juara Harapan 1","Provinsi","2017"),
  array("6", "65152862", "Rahul Al Jazuri", "Pendidikan Biologi - FIP","Biologi Festival 2016 - Lamongan","Juara 3","Kabupaten","2016"),
  array("7", "124356178", "Arfia Rahmi Febrianti", "Pendidikan Bahasa Inggris - FIP","Lomba English Competition - Surabaya","Juara Harapan 1","Provinsi","2017"),
  array("8", "143612312", "Aurelia Putri Wijaya", "Sistem Informasi - FTI","Kompetisi Teknologi 2018 - Madiun","Juara 3","Kabupaten","2018"),
  array("9", "251467578", "Sherly Aulia Fadilah", "Manajemen - FE","Lomba Infografis 2020 - UINSA Surabaya","Juara Harapan 2","Provinsi","2020"),
  array("10", "467666887", "Hamzah Ali Sayyidi", "Agroteknologi - FP","Lomba Short Movie di Farmatani Competition Mojokerto","Juara 3","Kabupaten","2016"),
);

echo "<h1 style='text-align: center; font-family: Arial, sans-serif;'>Data Mahasiswa Berprestasi UNWAHA</h1>";


// Create the table
echo "<table style='border-collapse: collapse; width:100%; text-align: center; font-family: Arial, sans-serif;'>";
echo "<thead style='background-color: #CCCCCC;'><tr>
<th style='border: 1px solid black;width: 5%;'>No</th>
<th style='border: 1px solid black;width: 15%;'>NIM</th>
<th style='border: 1px solid black;width: 20%;'>Nama</th>
<th style='border: 1px solid black;width: 20%;'>Prodi</th>
<th style='border: 1px solid black;width: 20%;'>Kegiatan</th>
<th style='border: 1px solid black;width: 10%;'>Prestasi</th>
<th style='border: 1px solid black;width: 10%;'>Tingkat</th>
<th style='border: 1px solid black;width: 10%;'>Tahun</th>
</tr>
</thead>";
echo "<tbody>";
foreach ($mhs as $row) {
  echo "<tr>";
  foreach ($row as $cell) {
    echo "<td style='border: 1px solid black;'>$cell</td>";
  }
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
