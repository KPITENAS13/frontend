<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM jadwal_praktikum");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[periode]</td>
            <td>$r[semester]</td>
            <td>$r[nama_praktikum]</td>
            <td>$r[kelas]</td>
            <td>$r[waktu]</td>
            <td>$r[asisten]</td>
        </tr>";
}
?>