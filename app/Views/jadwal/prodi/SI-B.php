<?php 

  $mhs = array(
    array('1', 'W.0204.1.11', 'WEB PROGRAMMING', '3', 'Minggu, I (07:30-09:00)', 'Sujono, M.Kom'),
    array('2', 'W.0204.1.14', 'MATEMATIKA DISKRIT', '0', 'Minggu, II (09:00-10:30)', 'Dr. H. Nurul Yaqin, M.Sc.'),
  )
?>

<table>
  <tr>
    <th>NO</th>
    <th>KODE MK</th>
    <th>MATA KULIAH</th>
    <th>SKS</th>
    <th>JADWAL</th>
    <th>DOSEN</th>
  </tr>

  <?php foreach ($mhs as $animek) {
        echo "<tr>";
        echo "<td>" . $animek[0] . "</td>";
        echo "<td>" . $animek[1] . "</td>";
        echo "<td>" . $animek[2] . "</td>";
        echo "<td>" . $animek[3] . "</td>";
        echo "<td>" . $animek[4] . "</td>";
        echo "<td>" . $animek[5] . "</td>";
        echo "</tr>";
      }
  ?>
</table>