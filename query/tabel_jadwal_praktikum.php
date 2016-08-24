<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM jadwal_praktikum");
$teks = '';
while ($r = mysql_fetch_array($q)) {
    $q2 = mysql_query("SELECT * FROM asisten,mahasiswa WHERE mahasiswa.id=asisten.nrp AND praktikum='$r[nama_praktikum]' AND periode='$r[periode]' AND kelas='$r[kelas]'");
    echo "
        <tr>
            <td>$r[periode]</td>
            <td>$r[nama_praktikum]</td>
            <td>$r[kelas]</td>
            <td>$r[waktu]</td>
            <td>$r[asisten] 
                <a href='#' title='Selengkapnya' data-html='true' data-toggle='popover' data-placement='top' data-content='";
    while ($r2 = mysql_fetch_array($q2)){
        echo " - " . $r2['nama'] . " <br />";
    }
    echo "'>
                    <span class='glyphicon glyphicon-info-sign'></span>
                </a>
            </td>
        </tr>";
}
?>