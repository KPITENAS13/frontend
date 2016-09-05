<?php

include "../koneksi.php";
$id = $_GET['id'];
$kategori = $_GET['praktikum'];
$periode = $_GET['periode'];
if (mysql_query("DELETE FROM koordinator WHERE id=$id")) {
    echo"
    <script>
            alert('Koordinator Berhasil Dihapus.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
} else {
    echo"
    <script>
            alert('Koordinator Gagal Dihapus.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
}
?>