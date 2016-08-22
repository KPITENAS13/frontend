<?php
$kode = $_GET[id];
$file = $_GET[path];
$kategori = $_GET[kategori];
if (!unlink($file)) {
    echo "error deleting $file";
} else {
    include "../koneksi.php";
    mysql_query("DELETE FROM file WHERE id=$kode");
    header("location:../admin_arsip.php?kategori=$kategori");
}

?>