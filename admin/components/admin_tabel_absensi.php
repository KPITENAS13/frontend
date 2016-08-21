<?php
include 'koneksi.php';

//cek jumlah pertemuan
$query = "SELECT COUNT(DISTINCT pertemuan) AS jml FROM absensi WHERE nama_praktikum='$_POST[praktikum]' and periode='$_POST[periode]' and kelas='$_POST[kelas]'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
$jml_pertemuan = $row['jml'];

$q = mysql_query("SELECT DISTINCT nrp,nama,count(nrp)as jml FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND nama_praktikum='$_POST[praktikum]' AND periode='$_POST[periode]' AND kelas='$_POST[kelas]' GROUP BY nrp");
while ($r = mysql_fetch_array($q)) {
    $persen = ($r[jml]*100)/$jml_pertemuan;
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>$persen %</td>
            <td><a href='.php?kode=$r[id]'> Hapus </a></td>
        </tr>";
}
?>