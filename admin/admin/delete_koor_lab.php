<?php
include "../koneksi.php";

$id = $_GET['kode'];
$q = mysql_query("select * from koordinator where id=$id");
$r = mysql_fetch_array($q);
$lab = $r['praktikum'];
$kode = $r['kode'];

$tanggal = date("Y-m-d h:i:s", time() + 18000);
$isi = "Maaf ! Anda telah diberhentikan menjadi Koordinator Laboratorium $lab";
mysql_query("insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");

mysql_query("DELETE FROM koordinator WHERE id=$_GET[kode]");
header('location:../praktikum.php');
?>