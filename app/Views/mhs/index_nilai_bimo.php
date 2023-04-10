<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<div class="container">

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
  <table class="table table-bordered table-striped">
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
      echo "<td>" . '<a class="btn btn-success" href="https://khusaladaora.000webhostapp.com/ci3">Klik Saya</a>' . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</div>

<?php echo $this->endSection() ?>