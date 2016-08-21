<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM jadwal_lab where no_ruang='2403'");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[kegiatan]</td>
            <td>$r[waktu]</td>
            <td>$r[penanggungjawab]</td>
        </tr>";
}
?>