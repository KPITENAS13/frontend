<?php
include "../koneksi.php";
$waktu = $_POST[hari] . " " . $_POST[jam];
mysql_query("INSERT INTO jadwal_praktikum
(periode,semester,nama_praktikum,kelas,waktu,asisten)VALUES
('$_POST[periode]','$_POST[semester]','$_POST[praktikum]','$_POST[kelas]','$waktu','$_POST[koordinator]')");
header('location:../admin_info_jadwal_praktikum.php');
?>