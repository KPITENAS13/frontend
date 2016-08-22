<?php
include "../koneksi.php";
mysql_query("UPDATE topik_ta SET 
	peserta = '$_POST[peserta]', 
        status = 'Berlangsung' 
	WHERE id = $_POST[id]");
header('location:../admin_info_topik_ta.php');
?>