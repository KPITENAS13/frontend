<?php
include "../koneksi.php";
mysql_query("INSERT INTO topik_ta
(judul,status)VALUES
('$_POST[judul]','Disarankan')");
header('location:../admin_info_topik_ta.php');
?>