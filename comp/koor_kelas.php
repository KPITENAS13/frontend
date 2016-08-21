<?php

include 'koneksi.php';
$query = "SELECT * FROM koordinator,mahasiswa WHERE praktikum='$_POST[kategori]' AND periode='$_POST[periode]' AND jabatan='Koor Asisten' AND koordinator.kode=mahasiswa.id";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
if (empty($row)) {
    $query = "select approve from asisten WHERE praktikum='$_POST[kategori]' AND periode='$_POST[periode]' AND nrp=$_SESSION[kode]";
    $hasil = mysql_query($query);
    $row = mysql_fetch_array($hasil);
    if ($row['approve'] == "") {
        echo "
        <div class='clients-comments text-center'>
            <img src='images/5.png' class='img-circle' alt=''>
            <h3>Asisten Laboratorium</h3>
            <h4><span>Open Registration</span></h4>
            <h4><a href='#' class='btn btn-primary' data-toggle='modal' data-target='#AslabModal'>Daftar Sekarang</a></h4>
        </div>";
    } else if ($row['approve'] == "R") {
        echo "
        <div class='clients-comments text-center'>
            <img src='images/5.png' class='img-circle' alt=''>
            <h3>Asisten Laboratorium</h3>
            <h4><span>Open Registration</span></h4>
            <h4><a href='#' class='btn btn-primary' disabled>Permintaan Sedang Diproses</a></h4>
        </div>";
    } else if ($row['approve'] == "Y") {
        echo "
        <div class='clients-comments text-center'>
            <img src='images/5.png' class='img-circle' alt=''>
            <h3>Koordinator Kelas</h3>
            <h4><span>Belum Ditentukan</span></h4>
            <h4><a class='btn btn-primary' href='asisten.php?kategori=$_POST[kategori]&&periode=$_POST[periode]'>Halaman Asisten</a></h4>
        </div>";
    }
} else {
    echo "
    <div class='clients-comments text-center'>
        <img src='$row[foto]' class='img-circle' alt=''>
        <h3>Koordinator Kelas</h3>
        <h4><span>$row[nama]</span></h4>";
    $q = "SELECT * FROM asisten WHERE praktikum='$_POST[kategori]' AND periode='$_POST[periode]' AND approve='Y' AND nrp=$_SESSION[kode]";
    $h = mysql_query($q);
    $r = mysql_fetch_array($h);
    if (empty($r)) {
        echo "</div>";
    } else {
        echo"
            <h4><a class='btn btn-primary' href='asisten.php?kategori=$_POST[kategori]&&periode=$_POST[periode]'>Halaman Asisten</a></h4>
        </div>";
    }
}
?>