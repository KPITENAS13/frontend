<?php
include "../koneksi/koneksi.php";
session_start();
mysql_query("DELETE FROM barang WHERE serial_num='$_GET[serial_num]'");
header('location:../PenghapusanInventaris.php');

$_SESSION['pesan'] = 'Data Anda Berhasil Dihapus!';

?>