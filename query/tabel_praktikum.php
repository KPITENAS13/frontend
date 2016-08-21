<?php
include './koneksi.php';
$prak = $_POST[kategori];
$peri= $_POST[periode];

$q = mysql_query("SELECT * FROM praktikum,mahasiswa where prak='$prak' AND periode='$peri' AND approve='Y' AND praktikum.nrp=mahasiswa.id");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>$r[kelas]</td>
            <td>$r[nilai_harian]</td>
            <td>$r[uts]</td>
            <td>$r[uas]</td>
            <td>$r[project]</td>
            <td>$r[absen]</td>
            <td>$r[total]</td>
            <td>$r[nilai]</td>
        </tr>";
}
?>