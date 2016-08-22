<?php
include "../koneksi.php";
mysql_query("DELETE FROM jadwal_praktikum WHERE id=$_GET[kode]");
header('location:../admin_info_jadwal_praktikum.php');
?>