<?php
include "../koneksi/koneksi.php";

$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
$Kode = $_GET['kode_pinjam'];
$Tipe = $_GET['tipe_pinjam'];

mysql_query("insert into peminjaman (id_peminjaman,type_peminjaman,kode_barang,kode_peminjam,tgl_pinjam,status_pinjam) values ('$_GET[kode_pinjam]','$_GET[tipe_pinjam]','$_GET[serial_num]','$_GET[id_peminjam]','$Date $Time','Belum Dikembalikan')");
mysql_query("UPDATE barang SET ketersediaan='TIDAK TERSEDIA' WHERE serial_num='$_GET[serial_num]'");
mysql_query("UPDATE requestpenelitian SET alat2='$_GET[serial_num]' WHERE kode_pinjam='$_GET[kode_pinjam]'");	

header("location:../ApprovePenelitian.php?kode_pinjam=$Kode");
?>