<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND nama_praktikum='$_POST[praktikum]' AND periode='$_POST[periode]' AND kelas='$_POST[kelas]'");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>$r[presentase] %</td>
        </tr>";
}
?>