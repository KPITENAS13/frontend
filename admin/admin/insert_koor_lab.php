<?php

include "../koneksi.php";
$kode = $_POST['kode'];
$lab = $_POST['lab'];

mysql_query("INSERT INTO koordinator
(kode, jabatan, praktikum)VALUES
($kode,'Koor Laboratorium','$lab')");

$tanggal = date("Y-m-d h:i:s", time() + 18000);
$isi = "Selamat ! Anda telah dipilih menjadi Koordinator Laboratorium $lab";
mysql_query("insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");

header('location:../praktikum.php');
?>