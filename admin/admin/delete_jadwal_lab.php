<?php
include "../koneksi.php";
mysql_query("DELETE FROM jadwal_lab WHERE id=$_GET[kode]");
header('location:../admin_info_jadwal_lab.php');
?>