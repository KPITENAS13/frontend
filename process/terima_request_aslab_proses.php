<?php
include "../koneksi.php";
mysql_query("UPDATE asisten SET approve='Y' WHERE nrp=$_GET[nrp]");
header("location:../koordinator.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>