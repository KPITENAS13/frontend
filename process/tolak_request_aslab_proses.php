<?php
include "../koneksi.php";
mysql_query("DELETE FROM asisten WHERE nrp=$_GET[nrp]");
header("location:../koordinator.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>