<?php
include "../koneksi.php";
mysql_query("UPDATE praktikum SET approve='Y' WHERE nrp=$_GET[nrp]");
header("location:../asisten.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>