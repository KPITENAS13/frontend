<?php

include "../koneksi.php";
$kategori = $_POST['praktikum'];
$periode = $_POST['periode'];
$kode = $_POST['kode'];

if (mysql_query("INSERT into koordinator (kode,jabatan,praktikum,periode) values ($kode,'Koor Praktikum','$kategori','$periode')")) {
    echo"
    <script>
            alert('Koordinator Berhasil Ditambahkan.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
} else {
    echo"
    <script>
            alert('Koordinator Gagal Ditambahkan.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
}
?>