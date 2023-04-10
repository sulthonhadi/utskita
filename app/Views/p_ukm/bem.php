<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<div class="container" style="min-height: 100vh !important;">
    <br>
    <h2 class="text-center mb-5">Biodata Anggota BEM</h2>

    <?php
    $siswa = [
        [
            'id' => '1', 'nim' => '220342112', 'nama' => 'Hadi', 'ttl' => '2001-07-31', 'jeniskelamin' => 'Laki - Laki', 'agama' => 'Islam', 'prodi' => 'Informatika', 'fakultas' => 'Teknologi Informasi', 'alamat' => 'Jombang', 'jabatan' => 'ketua'
        ],
        [
            'id' => '2', 'nim' => '228974632', 'nama' => 'Rizuki', 'ttl' => '2003-05-19', 'jeniskelamin' => 'Laki - Laki', 'agama' => 'Islam', 'prodi' => 'Informatika', 'fakultas' => 'Teknologi Informasi', 'alamat' => 'Jombang', 'jabatan' => 'sekretaris'
        ],
        [
            'id' => '3', 'nim' => '222254212', 'nama' => 'Supri', 'ttl' => '2001-08-16', 'jeniskelamin' => 'Laki - Laki', 'agama' => 'Islam', 'prodi' => 'Informatika', 'fakultas' => 'Teknologi Informasi', 'alamat' => 'Jombang', 'jabatan' => 'bendahara'
        ],
    ]
    ?>

    <table class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>TTL</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>PRODI</th>
                    <th>FAKULTAS</th>
                    <th>ALAMAT</th>
                    <th>JABATAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($siswa as $mahasiswa) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $mahasiswa['id'] ?></td>
                        <td><?php echo $mahasiswa['nim'] ?></td>
                        <td><?php echo $mahasiswa['nama'] ?></td>
                        <td><?php echo $mahasiswa['ttl'] ?></td>
                        <td><?php echo $mahasiswa['jeniskelamin'] ?></td>
                        <td><?php echo $mahasiswa['agama'] ?></td>
                        <td><?php echo $mahasiswa['prodi'] ?></td>
                        <td><?php echo $mahasiswa['fakultas'] ?></td>
                        <td><?php echo $mahasiswa['alamat'] ?></td>
                        <td><?php echo $mahasiswa['jabatan'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
</div>

<?php echo $this->endSection() ?>