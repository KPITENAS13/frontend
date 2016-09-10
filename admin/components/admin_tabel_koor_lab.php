<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM koordinator,dosen WHERE jabatan = 'Koor Laboratorium' and dosen.nid=koordinator.kode");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[kode]</td>
            <td>$r[nama]</td>
            <td>$r[praktikum]</td>
            <td><a href='admin/delete_koor_lab.php?kode=$r[id]'>Hapus</a></td>
        </tr>";
}
?>

