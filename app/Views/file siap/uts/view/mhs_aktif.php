<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>

<style>
    .table-striped>tbody>tr:nth-of-type(2n+1)>* {
        --bs-table-accent-bg: #20206a;
        color: white;
    }
</style>

<h1>DAFTAR MAHASISWA AKTIF</h1>
<div class="table-responsive">
    <table class="table table-striped">
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
<div>
    <a class="btn btn-primary" href="#">TAMBAH DATA</a>
</div>
<?php echo $this->endSection() ?>