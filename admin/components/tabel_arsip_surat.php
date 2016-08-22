<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM file where kategori='SuratKeluar'");
while ($r = mysql_fetch_array($q)) {
    $down = "inventory/" . $r[path];
    echo "
        <tr>
            <td>$r[nama_file]</td>
            <td>$r[tanggal_upload]</td>
            <td><a href='$down'> Download </a> </td>
        </tr>";
}
?>