<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
</head>

<body>
    <?php
    $pegawai = array(
        array("1", "Chusnul Chotimah, S.Sos.I., M.Pd.I.", "PAI", "2013.0101.0070", "0728068103"),
        array("2", "Dian Kusuma Wardani, M.Si.", "PAI", "2016.0101.0119", "0725109101"),
        array("3", "Dr. Didin Sirojudin, M.Pd.I.", "PAI", "2015.0101.0095", "0723098103"),
        array("4", "Emi Lilawati, S.Pd.I., M.Pd.", "PAI", "2016.0101.0121", "0708117902"),
        array("5", "Hidayatur Rohmah, M.Pd.", "PAI", "2016.0101.0117", "0727118402"),
        array("6", "Hilyah Ashoumi, M.Pd.I.", "PAI", "2013.0306.0071", "0705058803"),
        array("7", "Khoirun Nisa', M.Pd.I.", "PAI", "2015.0411.0100", "0723058802"),
        array("8", "M Kris Yuan Hidayatulloh, M.Pd.", "PAI", "2019.0101.0132", "0712019203"),
        array("9", "Machnunah Ani Zulfah, M.Pd.I.", "PAI", "06.0001.082", "0720048304"),
        array("10", "Mohammad Saat Ibnu Waqfin, S.Pd.I., M.Pd.", "PAI", "2016.0001.0120", "0730078403"),
        array("11", "Muhamad Khoirur Roziqin, S.Pd.I., M.Pd.", "PAI", "2016.0101.0122", "0728019202"),
        array("12", "Muhammad Fodhil, S.Pd.I., M.Pd.", "PAI", "2019.0101.0137", "0728058604"),
        array("13", "Dr. Saihul Atho Alaul Huda, M.Pd.I.", "PAI", "99.0001.057", "2130037001"),
        array("14", "Wahyudi, M.Pd I.", "PAI", "2020.0101.0144", "0704128804"),
        array("15", "Waslah, M.Pd.I.", "PAI", "96.0001.058", "2123036801"),
        array("16", "M. Aliyul Wafa, M.Pd.", "PAI", "2020.0101.0147", "0709119401"),
        array("17", "Nanang Qosim, S.Si., M.Ag.", "PAI", "2020.0101.0145", "0703129004"),
        array("18", "Afif Kholisun Nashoih, S.Pd., M.Hum.", "PBA", "2015.0102.0096", "0728049004"),
        array("19", "Amrini Shofiyani, S.Pd., M.Pd.I.", "PBA", "2014.0102.0092", "0727048808"),
        array("20", "Aufia Aisa, M.Pd.I.", "PBA", "2015.0102.0104", "0704049003"),
        array("21", "Lailatul Mathoriyah,M.Pd.", "PBA", "2013.0102.0068", "0724018206"),
        array("22", "Dr. M. Dzikrul Hakim Al Ghozali,M.Pd.I.", "PBA", "2015.0102.0112", "0720028702"),
        array("23", "Nurul Hidayah,M.Hum.", "PBA", "2015.0102.0115", "0715089003"),
        array("24", "Rina Dian Rahmawati,M.Pd.I.", "PBA", "2015.0102.0106", "0717058903"),
        array("25", "Siti Sulaikho,S.Pd.I., M.Pd.", "PBA", "2015.0102.0118", "0712038703"),
        array("26", "Amin Awal Amarudin, S.Sy, M.S.I.", "SE", "2018.0103.0127", "0716038201"),
        array("27", "Arivatu Ni'Mati Rahmatika, S.E.I, M.E.I.", "SE", "2013.0414.0079", "0731109101"),
        array("28", "Ashlihah, S.E., M.M.", "SE", "2013.0414.0063", "0718068204"),
        array("29", "Bekti Widyaningsih, S.Kom, M.E.", "SE", "2019.0103.0138", "0723019101"),
        array("30", "Dr. M. Wafiyul Ahdi, S.H., M.Pd.I.", "SE", "2015.0103.0099", "0721037902"),
        array("31", "Naily El Muna, S.E, M.H.", "SE", "2018.0103.0128", "0709018704"),
        array("32", "Moh. Anshori Aris Widya, M.Kom.", "IT", "2018.0201.0124", "0729068607"),
        array("33", "Dr. H. Nurul Yaqin, M.Sc", "IT", "UBU.2002.03.10802", "0711026001"),
        array("34", "Primaadi Airlangga, M.I.T.", "IT", "2010.0205.0133", "0718108602"),
        array("35", "Sujono, M.Kom.", "IT", "2018.0201.0123", "0725068804"),
        array("36", "Dr. Zulfikar, S.P., M.Si.,", "IT", "UBU.2005.02.10802", "0724116802"),
        array("37", "Achmad Agus Athok Miftachuddin, M.Kom.", "IT", "2021.0201.0154", "0724088904"),
        array("38", "Agus Sifaunajah, M.Kom.", "SI", "UBU.2009.08.55.201", "0705088501"),
        array("39", "Dr. Muhyiddin Zainul Arifin, S.E., M.M.", "SI", "UBU.2002.01.10804", "0709047301"),
        array("40", "Munawarah, M.Si.", "SI", "UBU.2002.04.10804", "0720107801"),
        array("41", "Nur Khafidhoh, M.Kom.", "SI", "2018.0203.0131", "0716079202"),
        array("42", "Siti Sufaidah, S.Kom, M.Si.", "SI", "2005.0203.0132", "0714128301"),
        array("43", "Tholib Hariono, M.Kom.", "SI", "2009.0204.0134", "0709038301"),
        array("44", "Akhmad Kanzul Fikri, M.Pd.", "PBI", "2013.0413.0056", "0704078704"),
        array("45", "Hanifah, M.Pd.", "PBI", "2015.0413.0091", "0727078702"),
        array("46", 'Iin Baroroh MaArif, S.S., M.Pd.', 'PBI', '2013.0413.0033', '0725028302'),
        array("47", 'Luluk Choirun Nisak Nur, M.Pd.', 'PBI', '2013.0413.0069', '0726068901'),
        array('48', 'Nurul Afidah, M.Pd.', 'PBI', '2015.0413.0092', '0709119101'),
        array('49', 'Ulfa Wulan Agustina, M.Pd.', 'PBI', '	2015.0413.0090', '0715088701'),
        array('50', 'Yuyun Bahtiar, M.Pd', 'PBI', '2013.0413.0078', '0727068004'),
        array('51', 'Faisol Hidayatulloh, M.Pd.', 'PM	', '2013.0412.0022', '0707108703'),
        array('52', 'Fitri Umardiyah, M.Pd.', 'PM', '2015.0412.00114', '0715049102'),
        array('53', 'Khusnul Khotimah, S.Pd.I, M.Pd.', 'PM', '2015.0412.0087', '0729068606'),
        array('54', 'M. Farid Nasrulloh, S.Pd.Si., M.Pd.', 'PM', '2015.0412.0088', '0713048705'),
        array('55', 'Wisnu Siwi Satiti, S.Pd., M.Sc.	', 'PM', '2015.0412.0086', '0706088803'),
        array('56', 'Dr. M. Qoyum Zuhriawan, M.Pd.', 'PM', '2022.0412.0154', '0708109001'),
        array('57', 'Anggun Wulandari, S.Si., M.Pd.', 'PB', '2015.0410.0053', '0709118803'),
        array('58', 'Fatikhatun Nikmatus Sholihah, M.Pd.	', 'PB', '2015.0410.0081', '0716068803'),
        array('59', 'Mucharommah Sartika Ami, M.Pd.', 'PB', '2015.0410.0084', '0727029003'),
        array('60', 'Ospa Pea Yuanita Meishanti, M.Pd.', 'PB', '2013.0410.0051', '0701058405'),
        array('61', 'Rossanita Truelovin Hadi Putri, M.Pd.', 'PB', '2022.0410.0157', '0713079504'),
        array('62', 'Moch. Faizul Huda, M.Si.', 'PB', '2022.0410.0155', '0710089502'),
        array('63', 'Asiyah LuLuUl Husna, M.Pd.', 'PB', '2013.0412.0061', '0721018902'),
        array('64', 'Ino Angga Putra, M.Pd.', 'PF', '2013.0411.0065', '0727068902'),
        array('65', 'Kartika Wulandari, M.Pd.', 'PF', '2013.0411.0047', '0726118703'),
        array('66', 'Novia Ayu Sekar Pertiwi, S.Si., M.Pd.', 'PF', '2013.0411.0043', '0726118702'),
        array('67', 'Suci Prihatiningtyas, S.Si., M.Pd.', 'PF', '2013.0411.0043', '0724098602'),
        array('68', 'Ana Mariatul Khiftiyah, M.Si.', 'THP', '2020.0308.0140', '0726099401'),
        array('69', 'Miftachul Chusnah, M.P.', 'THP', '2019.0309.0135', '0717017502'),
        array('70', 'Nurul Aini, M.Si.', 'THP', '2020.0309.0142', '0708059402'),
        array('71', 'Yessita Puspaningrum, M.Si.', 'THP', '2020.0309.0139', '0724099201'),
        array('72', 'Abu Naim, M.Si', 'RPB', '2020.0308.0143', '0710098704'),
        array('73', 'Canggih Nailil Magfiroh, S.P., M.Sc.', 'RPB', '2020.0309.0141', '0722089402'),
        array('74', 'Dyah Ayu Sri Hartanti, M.Si.', 'RPB', '2018.0307.0126', '0731059301'),
        array('75', 'Siti Aminatuz Zuhria, M.P.', 'RPB', '2018.0306.0125', '0714088903'),
        array('76', 'Umar Khasan, S.Agr., M.P.', 'RPB', '2021.0412.0151', '0721119301'),
        array('77', 'Mochammad Syafiuddin Shobirin, M.Pd.I.', 'RPB', '2015.0412.0098', '0702048803'),
        array('78', 'Agus Suhadi, M.P.', 'AGRIB', '2020.0306.0153', '8963540022'),
        array('79', 'Purbowo, S.Agr., M.P.', 'AGRIB', '2020.0306.0146', '0711109402'),
        array('80', 'Rohmat Hidayat, S.S., M.Pd.', 'AGRIB', '2015.0306.0107', '0709108405'),
        array('81', 'Siti Nur Qomariyah, S.E., M.Si.', 'AGRIB', '2013.0414.0080', '0721076904'),
        array('82', 'Moh. Faridl Darmawan, M.Pd.', 'AGRIB', '2015.0306.0110', '0727108603'),
        array('83', 'Septi Ambar Indraningtia Sukma, M.P.', 'AGRIB', '2020.0308.0156', '0711099601'),
        array('84', 'Ambar Susanti, M.P.', 'AGROEK', '2013.0307.0101', '0714107504'),
        array('85', 'Anggi Indah Yuliana, M.P.', 'AGROEK', '2013.0307.0111', '0708079101'),
        array('86', 'Mazidatul Faizah, S.Si., M.Si.,', 'AGROEK', '2013.0410.0055', '0729118705'),
        array('87', 'Moh. Jafar Sodiq Maksum, M.H.', 'AGROEK', '2015.0307.0105', '0720097603'),
        array('88', 'Mohamad Nasirudin, S.Si., M.Ling.', 'AGROEK', '2015.0410.0113', '0722039004'),
        array('89', 'Umi Kulsum Nur Qomariah, S.Si., M.Sc.', 'AGROEK', '2015.0307.0108', '0705039001'),
        array('90', 'Akhmad Taqiyuddin, M.H.I.', 'MJ', '2012.0414.0093', '07716106901'),
        array('91', 'Ita Rahmawati, S.E., M.Si.', 'MJ', '2015.0414.0116', '07716106901'),
        array('92', 'Khotim Fadhli, M.Pd.', 'MJ', '2019.0514.0136', '0703028802'),
        array('93', 'Lailatus Saadah, S.E., M.M.', 'MJ', '2013.0414.0067', '0724127601'),
        array('94', 'MarAtul Fahimah, S.P., M.M.', 'MJ', '2013.0414.0042', '0710028204'),
        array('95', 'Septian Ragil Anandita, M.Pd.', 'MJ', '2015.0413.0093', '0704098802'),
        array('96', 'Wisnu Mahendri, M.M.', 'MJ', '2020.0414.0146', '0730099501'),
    );
    ?>
    <nav>
        <div class="logo"><img src="https://pmb.unwaha.ac.id/wp-content/uploads/2022/11/logo-unwaha-pn2.png" width="100px"><a href="#"></a></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <br>
    <h1>PEGAWAI UNIVERSITAS KH.A. WAHAB HASBULLAH TAMBAKBERAS JOMBANG</h1>
    <center>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>NIY</th>
                <th>NIDN</th>
            </tr>

            <?php
            foreach ($pegawai as $anggota) {
                echo "<tr>";
                echo "<td>" . $anggota[0] . "</td>";
                echo "<td>" . $anggota[1] . "</td>";
                echo "<td>" . $anggota[2] . "</td>";
                echo "<td>" . $anggota[3] . "</td>";
                echo "<td>" . $anggota[4] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 80%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #4CAF50;
        color: white;
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

</html>