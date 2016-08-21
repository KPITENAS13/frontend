<?php

include 'koneksi.php';
$query = "SELECT * FROM koordinator,dosen WHERE praktikum='$_POST[kategori]' AND periode='$_POST[periode]' AND jabatan='Koor Laboratorium' AND koordinator.kode=dosen.nid";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
if (empty($row)) {
    echo "
    <div class='clients-comments text-center'>
        <img src='images/5.png' class='img-circle' alt=''>
        <h3>Koordinator Laboratorium</h3>
        <h4><span>Belum Ditentukan</span></h4>
    </div>";
} else {
    echo "
    <div class='clients-comments text-center'>
        <img src='images/5.png' class='img-circle' alt=''>
        <h3>Koordinator Laboratorium</h3>
        <h4><span>$row[nama]</span></h4>
    </div>";
}
?>