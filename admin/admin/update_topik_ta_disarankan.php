<?php
include "../koneksi.php";
mysql_query("UPDATE topik_ta SET 
        judul = '$_POST[judul]' 
	WHERE id = $_POST[id]");
header('location:../admin_info_topik_ta.php');
?>