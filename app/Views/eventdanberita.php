
<?php
//data event
$event1 = array(
  "judul" => "Webinar Kewirausahaan",
  "tanggal" => "25 Maret 2023",
  "lokasi" => "Online",
  "deskripsi" => "Webinar tentang kewirausahaan dengan narasumber yang berpengalaman",




);

$event2 = array(
  "judul" => "Lomba Desain Poster",
  "tanggal" => "1 April 2023",
  "lokasi" => "Kampus A",
  "deskripsi" => "Lomba desain poster dengan tema lingkungan"

);

$event3 = array(
  "judul" => "Seminar Teknologi",
  "tanggal" => "8 April 2023",
  "lokasi" => "Kampus B",
  "deskripsi" => "Seminar tentang perkembangan teknologi terkini"
);

//data berita
$berita1 = array(
  "judul" => "Peringatan Hari Kebangkitan Nasional",
  "tanggal" => "20 Mei 2023",
  "isi" => "Hari Kebangkitan Nasional diperingati setiap tanggal 20 Mei untuk mengenang peristiwa Sumpah Pemuda dan gerakan nasionalisme pada tahun 1908."
);

$berita2 = array(
  "judul" => "Inovasi Produk Mahasiswa",
  "tanggal" => "2 Juni 2023",
  "isi" => "Produk inovatif yang dikembangkan oleh mahasiswa kini semakin beragam dan berhasil menarik perhatian masyarakat."
);

$berita3 = array(
  "judul" => "Pendidikan Gratis",
  "tanggal" => "15 Juni 2023",
  "isi" => "Pemerintah berkomitmen untuk memberikan pendidikan gratis bagi masyarakat kurang mampu."
);

$gambar = array(
  "https://files.planet.ung.ac.id/univ/14-31.08.2021.13.40.44.jpg",
  "https://www.lombadesain.id/wp-content/uploads/2022/04/POSTER-DGD-2-SLIDE-1-50.jpg",
  "https://www.its.ac.id/wp-content/uploads/2019/05/WhatsApp-Image-2019-05-06-at-11.54.33.jpeg",
  "https://disdik.samarindakota.go.id/wp-content/uploads/2022/05/kebangkitan-nasional.jpg",
  "https://uingusdur.ac.id/images/sj_univer/pengumuman/pameran_produk.jpg",
  "https://risetcdn.jatimtimes.com/images/2020/08/24/Potret-Pendidikan-Gratis-Jawa-Timur2b4a3230804023d8.jpg"

);

//menampilkan event
echo "<h3>Event Terbaru</h3>";
echo "<ul>";
echo "<li><strong>" . $event1['judul'] . "<br><img src=" . $gambar[0] . " width=500px>" . "</strong><br>Tanggal: " . $event1['tanggal'] . "<br>Lokasi: " . $event1['lokasi'] . "<br>" . $event1['deskripsi'] . "</li>";
echo "<li><strong>" . $event2['judul'] . "<br><img src=" . $gambar[1] . " width=500px>" . "</strong><br>Tanggal: " . $event2['tanggal'] . "<br>Lokasi: " . $event2['lokasi'] . "<br>" . $event2['deskripsi'] . "</li>";
echo "<li><strong>" . $event3['judul'] . "<br><img src=" . $gambar[2] . " width=500px>" . "</strong><br>Tanggal: " . $event3['tanggal'] . "<br>Lokasi: " . $event3['lokasi'] . "<br>" . $event3['deskripsi'] . "</li>";
echo "</ul>";

//menampilkan berita
echo "<h3>Berita Terbaru</h3>";
echo "<ul>";
echo "<li><strong>" . $berita1['judul'] . "<br><img src=" . $gambar[3] . " width=500px>" . "</strong><br>Tanggal: " . $berita1['tanggal'] . "<br>" . $berita1['isi'] . "</li>";
echo "<li><strong>" . $berita2['judul'] . "<br><img src=" . $gambar[4] . " width=500px>" . "</strong><br>Tanggal: " . $berita2['tanggal'] . "<br>" . $berita2['isi'] . "</li>";
echo "<li><strong>" . $berita3['judul'] . "<br><img src=" . $gambar[5] . " width=500px>" . "</strong><br>Tanggal: " . $berita3['tanggal'] . "<br>" . $berita3['isi'] . "</li>";
echo "</ul>";

?>