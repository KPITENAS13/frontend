<?php
include "../koneksi/koneksi.php";
$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
mysql_query("UPDATE requestpraktikum SET 
status='Approve',
tanggal_confirm='$Date $Time'
WHERE kode_pinjam='$_POST[inputKode_pinjam]'");

header('location:../RequestPraktikum.php');
?>