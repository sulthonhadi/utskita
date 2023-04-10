<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<div class="container">
    <h1><b>Daftar Prodi</b></h1>

    <br>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr class="text-center bg-info">
                <th>Kode Prodi</th>
                <th>Fakultas</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>1</td>
                <td>Fakultas Ekonomi</td>
                <td>Management</td>
            </tr>
            <tr class="text-center">
                <td>1</td>
                <td>Fakultas Pertanian</td>
                <td>Agrobisnis</td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>Fakultas Pertanian</td>
                <td>Agroeteknologi</td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>Fakultas Pertanian</td>
                <td>Teknologi Hasil</td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td>Fakultas Pertanian</td>
                <td>Rekayasa Pertanian & Biosistem</td>
            </tr>
            <tr class="text-center">
                <td>1</td>
                <td>Fakultas Ilmu Pendidikan</td>
                <td>Pendidikan Matematika</td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>Fakultas Ilmu Pendidikan</td>
                <td>Pendidikan Fisika</td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>Fakultas Ilmu Pendidikan</td>
                <td>Pendidikan Biologi</td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td>Fakultas Ilmu Pendidikan</td>
                <td>Pendidikan Bahasa Inggris</td>
            </tr>
            <tr class="text-center">
                <td>1</td>
                <td>Fakultas Teknologi Informasi</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>Fakultas Teknologi Informasi</td>
                <td>Informatika</td>
            </tr>
            <tr class="text-center">
                <td>1</td>
                <td>Fakultas Agama Islam</td>
                <td>Pendidikan Agama Islam</td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>Fakultas Agama Islam</td>
                <td>Pendidikan Bahasa Arab</td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>Fakultas Agama Islam</td>
                <td>Ekonomi Syariah</td>
            </tr>
        </tbody>
    </table>
</div>
<?php echo $this->endSection() ?>