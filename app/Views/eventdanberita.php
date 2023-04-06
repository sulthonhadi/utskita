<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Event Dan Berita</title>
</head>
<style>
body {
  font-family: sans-serif;
  background-color: #f2f2f2;
  font-family: roboto;
  background-image: url('https://1.bp.blogspot.com/-4APhKF3xsr8/YUB9DsJe3_I/AAAAAAAAaB4/dIZ9ams2plMGsokKr_p5eqflIglAYoC2ACLcBGAsYHQ/w640-h360/abstract-background-hijau-keren-dan-kosong.png');
  background-size: 100% auto;
  font-size: 25px;
}


h3 {
  font-size: 50px;
  margin-bottom: 0.5em;
 color: whitesmoke;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
  
}

li {
  background-color: #fff;
  padding: 1em;
  margin-bottom: 1em;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  
}

li:hover {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  color: green;
}

li strong {
  font-weight: bold;
}

li span {
  font-size: 0.8em;
  font-style: italic;
  color: #999;
}

@font-face{
		font-family: roboto;
		src: url(https://colorlib.com/etc/tb/Table_Fixed_Column/fonts/roboto/Roboto-Bold.ttf);
	}

  nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #f2f2f2;
    }

    .logo a {
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    li {
        margin: 0 10px;
    }

    a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: bold;
    }



</style>
<body>
<nav>
        <div class="logo"><img src="https://pmb.unwaha.ac.id/wp-content/uploads/2022/11/logo-unwaha-pn2.png" width="100px"><a href="#"></a></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Customer service</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <br>








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
echo "<li><strong>".$event1['judul']."<br><img src=".$gambar[0]." width=500px>"."</strong><br>Tanggal: ".$event1['tanggal']."<br>Lokasi: ".$event1['lokasi']."<br>".$event1['deskripsi']."</li>";
echo "<li><strong>".$event2['judul']."<br><img src=".$gambar[1]." width=500px>"."</strong><br>Tanggal: ".$event2['tanggal']."<br>Lokasi: ".$event2['lokasi']."<br>".$event2['deskripsi']."</li>";
echo "<li><strong>".$event3['judul']."<br><img src=".$gambar[2]." width=500px>"."</strong><br>Tanggal: ".$event3['tanggal']."<br>Lokasi: ".$event3['lokasi']."<br>".$event3['deskripsi']."</li>";
echo "</ul>";

//menampilkan berita
echo "<h3>Berita Terbaru</h3>";
echo "<ul>";
echo "<li><strong>".$berita1['judul']."<br><img src=".$gambar[3]." width=500px>"."</strong><br>Tanggal: ".$berita1['tanggal']."<br>".$berita1['isi']."</li>";
echo "<li><strong>".$berita2['judul']."<br><img src=".$gambar[4]." width=500px>"."</strong><br>Tanggal: ".$berita2['tanggal']."<br>".$berita2['isi']."</li>";
echo "<li><strong>".$berita3['judul']."<br><img src=".$gambar[5]." width=500px>"."</strong><br>Tanggal: ".$berita3['tanggal']."<br>".$berita3['isi']."</li>";
echo "</ul>";





?>

</body>
</html>