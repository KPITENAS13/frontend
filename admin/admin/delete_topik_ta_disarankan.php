<?php
include "../koneksi.php";
mysql_query("DELETE FROM topik_ta WHERE id=$_GET[kode] and status='disarankan'");
header('location:../admin_info_topik_ta.php');
?>