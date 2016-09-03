<?php

include '../koneksi.php';
$praktikum = $_GET['praktikum'];
$periode = $_GET['periode'];
$per_temp = explode("/", $periode);
$p1 = substr($per_temp[0], 2, 2);
$p2 = substr($per_temp[1], 2, 2);
$newperiode = $p1 . $p2;
//cek jumlah pertemuan
$query = "SELECT pertemuan_berlangsung FROM presentase_nilai WHERE praktikum='$praktikum' AND periode='$periode'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
$jml_pertemuan = $row['pertemuan_berlangsung'];

$q = mysql_query("SELECT DISTINCT nrp,nama,count(nrp)as jml FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND nama_praktikum='$praktikum' AND periode='$newperiode' GROUP BY nrp");
while ($r = mysql_fetch_array($q)) {
    $persen = ($r['jml'] * 100) / $jml_pertemuan;
    mysql_query("UPDATE praktikum SET absen=$persen WHERE prak='$praktikum' AND periode='$periode' AND nrp=$r[nrp]");
}
?>