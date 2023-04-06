<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
        }

        body {
            padding: 0;
            margin: 0;
            line-height: 1.25;
        }

        .container {
            background-color: transparent;
        }

        .navbar {
            background-color: #03256C;
            padding: 20px 0 20px 0;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .navbar a {
            text-decoration: none;
            color: white;
        }

        h1 {
            text-align: center;
            font-size: 20px;
        }

        .tabel-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow-x: auto;
            overflow-y: auto;
            margin: 20px;
            padding: 10px;
        }

        .tambah {
            display: flex;
            justify-content: flex-end;
            margin: 30px;
        }

        .tambah button {
            background-color: #2541B2;
            width: 10rem;
            height: 5vh;
            border-radius: 20px;
        }

        .tambah a {
            text-decoration: none;
            color: white;
        }


        .dtabel {
            font-family: sans-serif;
            color: black;
            border-collapse: collapse;
        }

        th {
            border-bottom: 4px solid black;
            border-right: 1px solid black;
            padding: 14px 20px;
            background: #2541B2;
            color: white;
        }

        td {
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            padding: 8px 20px;
        }

        table tr:nth-child(2n+0) {
            background: #6B728E;
            color: white;
        }

        /* laptop */
        @media (max-width : 1336px) {
            html {
                font-size: 75%;
            }

            .tabel-container {
                display: flex;
                justify-content: center;
                flex-direction: column;
                overflow-x: auto;
                overflow-y: auto;
                margin: 20px;
                padding: 10px;
            }

            .tambah {
                display: flex;
                justify-content: flex-end;
                margin: 30px;
            }

            .tambah button {
                background-color: #2541B2;
                width: 10rem;
                height: 5vh;
                border-radius: 20px;
            }

            .tambah a {
                text-decoration: none;
                color: white;
            }

            .dtabel {
                font-family: sans-serif;
                color: black;
                border-collapse: collapse;
                table-layout: fixed;
                padding: 0;
                margin: 0;
            }

            .dtabel,
            th,
            td {
                border: 1px solid black;
                padding: 7px 18px;
            }

        }

        /* tablet */
        @media (max-width : 820px) {
            html {
                font-size: 65%;
            }

            .tabel-container {
                display: flex;
                justify-content: center;
                flex-direction: column;
                overflow-x: auto;
                overflow-y: auto;
                margin: 20px;
                padding: 10px;
            }

            .tambah {
                display: flex;
                justify-content: flex-end;
                margin: 30px;
            }

            .tambah button {
                background-color: #2541B2;
                width: 10rem;
                height: 5vh;
                border-radius: 20px;
            }

            .tambah a {
                text-decoration: none;
                color: white;
            }

            .dtabel {
                font-family: sans-serif;
                color: black;
                border-collapse: collapse;
                table-layout: fixed;
                padding: 0;
                margin: 0;
            }

            .dtabel,
            th,
            td {
                border: 1px solid black;
                padding: 5px 15px;
            }

        }

        /* mobile */
        @media (max-width : 450px) {
            html {
                font-size: 55%;
            }



            .tabel-container {
                display: flex;
                box-sizing: border-box;
                justify-content: center;
                flex-direction: column;
                overflow-x: auto;
                overflow-y: auto;
                margin: 30px;
                padding: 0px;
            }

            .tambah {
                display: flex;
                justify-content: flex-end;
                margin: 30px;
            }

            .tambah button {
                background-color: #2541B2;
                width: 10rem;
                height: 5vh;
                border-radius: 20px;
            }

            .tambah a {
                text-decoration: none;
                color: white;
            }

            .dtabel {
                display: block;
                border-collapse: collapse;
                padding: 0;
                margin: 0;
                table-layout: fixed;
            }

            th,
            td {
                border: 1px solid black;
                padding: 4px 14px;
            }

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="#"><i data-feather="menu"></i></a>
            <a href="#">
                <p>UNIVERSITAS KH. WAHAB HASBULLAH</p>
            </a>
            <a href="#"><i data-feather="user"></i></a>
        </div>
        <h1>DAFTAR MAHASISWA AKTIF</h1>
        <div class="tabel-container">
            <table class="dtabel">
                <thead>
                    <tr>
                        <th>NO </th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>LAHIR</th>
                        <th>JK</th>
                        <th>WA</th>
                        <th>EMAIL</th>
                        <th>FAKULTAS</th>
                        <th>PRODI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($mhs_aktif as $key) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $key["nim"]; ?></td>
                            <td><?= $key["nama"]; ?></td>
                            <td><?= $key["alamat"]; ?></td>
                            <td><?= $key["lahir"]; ?></td>
                            <td><?= $key["jk"]; ?></td>
                            <td><?= $key["wa"]; ?></td>
                            <td><?= $key["email"]; ?></td>
                            <td><?= $key["fakultas"]; ?></td>
                            <td><?= $key["prodi"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tambah">
        <button><a href="#">TAMBAH DATA</a></button>
    </div>
</body>

</html>