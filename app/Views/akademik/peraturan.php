<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="https://unwaha.ac.id/wp-content/uploads/2022/12/logo-header-web-new.png" style="width:110%; background-color:green;"></a>
    <!--	<a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a> -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-white w3-left-align" style.display='block'>
        <h4><b> Peraturan Perkuliahan</b></h4>
        <h4><b> Universitas KH. A. Wahab Hasbullah </b></h4>
    </a>
    <!-- <a href=" javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding fa fa-pencil"></i></a> -->
    <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i>Inbox (3)<i class="fa fa-caret-down w3-margin-left"></i></a>
    <div id="Demo1" class="w3-hide w3-animate-left">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Borge');w3_close();" id="firstTab">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="https://media.tenor.com/Qa6DhGNb_sQAAAAC/ryou-bocchi-the-rock.gif" style="width:15%;"><span class="w3-opacity w3-large">Ryou Yamada</span>
                <h6>Subject: Peraturan Perkuliahan 1.</h6>
                <p>Setiap mahasiswa aktif diwajibkan mengikuti perkuliahan untuk semua mata kuli...</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');w3_close();">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="https://media.tenor.com/zMLJmr62S6sAAAAC/private.gif" style="width:15%;"><span class="w3-opacity w3-large">Boa Hancock</span>
                <h6>Subject: Peraturan Perkuliahan 2.</h6>
                <p>Mahasiswa peserta kuliah diwajibkan mengikuti perkuliahan dengan sop...</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');w3_close();">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="https://media.tenor.com/PbPr6Bpj-6kAAAAd/bocchi-the-rock-anime.gif" style="width:15%;"><span class="w3-opacity w3-large">Gotou Hitori</span>
                <h6>Subject: Peraturan Perkuliahan 3.</h6>
                <p>Setelah perkuliahan selesai, mahasiswa peserta kuliah diwajibkan merapi...</p>
            </div>
        </a>
    </div>
</nav>
<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<!-- Page content -->
<div class="w3-main" style="margin-left:320px;">
    <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
    <!-- <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a> -->

    <div id="Borge" class="w3-container person">
        <br>
        <img class="w3-round  w3-animate-top" src="https://media.tenor.com/Qa6DhGNb_sQAAAAC/ryou-bocchi-the-rock.gif" style="width:20%;">
        <h5 class="w3-opacity">Subject: Peraturan Perkuliahan 1</h5>
        <h4><i class="fa fa-clock-o"></i> From Ryou Yamada, March 21, 2023.</h4>
        <a class="w3-button w3-light-grey" href="#">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
        <a class="w3-button w3-light-grey" href="#">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
        <hr>
        <p>Setiap mahasiswa aktif diwajibkan mengikuti perkuliahan untuk semua mata kuliah yang telah diisi pada KRS sesuai dengan waktu, tempat, kelas dan dosen yang telah ditentukan pada jadwal perkuliahaan adalah sebagai berikut :
        <p>1. Bagi perkuliahan reguler/pagi sebelum perkuliahan dimulai wajib membaca alqur’an/tilawah yang dipimpin oleh dosen mata kuliah pada jam pertama perkuliahan.</p>
        <p>2. Mahasiswa peserta kuliah diwajibkan hadir sebelum kuliah dimulai.</p>
        <p>3. Bila peserta kuliah terlambat hadir, diwajibkan melapor kepada dosen yang bersangkutan. Dosen berhak melarang peserta kuliah yang datang lebih dari 30 menit setelah kuliah dimulai untuk mengikuti perkuliahan pada jam tersebut.</p>
        <P>4. Mahasiswa peserta kuliah diwajibkan untuk mengisi daftar hadir..</p>
        <p><br>Ryou Yamada</p>
    </div>

    <div id="Jane" class="w3-container person">
        <br>
        <img class="w3-round w3-animate-top" src="https://media.tenor.com/zMLJmr62S6sAAAAC/private.gif" style="width:20%;">
        <h5 class="w3-opacity">Subject: Peraturan Perkuliahan 2</h5>
        <h4><i class="fa fa-clock-o"></i> From Boa Hancock, February 25, 2023.</h4>
        <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
        <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
        <hr>
        <p>Mahasiswa peserta kuliah diwajibkan mengikuti perkuliahan dengan sopan, tertib dan tenang serta mematuhi tata tertib sebagai berikut :</p>
        <p>1. Berpenampilan sopan dan rapi, dengan berpakaian baju/kaos berkerah dan memakai sepatu.</p>
        <p>2. Mengikuti kuliah dengan tertib dan tenang, tidak diperkenankan melakukan perbuatan-perbuatan yang mengganggu jalannya perkuliahan.</p>
        <p>3. Mengikuti kuliah dengan seksama, tidak diperkenankan keluar masuk ruangan kuliah tanpa seizin dosen dan/atau mengerjakan hal-hal lain, kecuali yang berkaitan dengan materi kuliah.</p>
        <p>4. Mengerjakan tugas yang diberikan oleh Dosen dengan penuh tanggung jawab.</p>
        <P>5. Menjaga kebersihan ruang kuliah dan fasilitas perkuliahan.</P>
        <P>6. Dosen berhak mengeluarkan mahasiswa dari ruang kuliah jika mahasiswa peserta kuliah melanggar tata tertib perkuliahan.</P>
        </p>
        <p><br>Boa Hancock</p>
    </div>
    <div id="John" class="w3-container person">
        <br>
        <img class="w3-round w3-animate-top" src="https://media.tenor.com/PbPr6Bpj-6kAAAAd/bocchi-the-rock-anime.gif" style="width:20%;">
        <h5 class="w3-opacity">Subject: Peraturan Perkuliahan 3</h5>
        <h4><i class="fa fa-clock-o"></i> From Gotou Hitori, January 23, 2023.</h4>
        <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
        <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
        <hr>
        <p>1. Setelah perkuliahan selesai, mahasiswa peserta kuliah diwajibkan merapikan kembali tempat duduk dan fasilitas perkuliahan lain yang digunakan dan segera meninggalkan ruang kelas jika tidak ada perkuliahan kembali agar bisa dirapikan untuk perkuliahaan selanjutnya.</p>
        <p>2. Mahasiswa meninggalkan ruang kuliah dengan tertib dan tenang.</p>
        <P>3. Jangan Lupa Nongkrong Setelah Perkuliahan Selesai.</P>
        <p>Gotou Hitori</p>
    </div>

</div>

<script>
    var openInbox = document.getElementById("myBtn");
    openInbox.click();

    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    function myFunc(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-red";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-red", "");
        }
    }

    openMail("Borge")

    function openMail(personName) {
        var i;
        var x = document.getElementsByClassName("person");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x = document.getElementsByClassName("test");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" w3-light-grey", "");
        }
        document.getElementById(personName).style.display = "block";
        event.currentTarget.className += " w3-light-grey";
    }
</script>

<script>
    var openTab = document.getElementById("firstTab");
    openTab.click();
</script>