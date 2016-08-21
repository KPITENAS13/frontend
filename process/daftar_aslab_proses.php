<?php
session_start();
include "../koneksi.php";
$praktikum = $_POST[kategori];
$periode = $_POST[periode];
mysql_query("INSERT INTO asisten (nrp,praktikum,periode,approve) VALUES ($_SESSION[kode],'$praktikum','$periode','R')");
echo"
    <script>
            alert('Permintaan anda sedang diproses. Mohon tunggu konfirmasi selanjutnya !');
            window.location.href='../lab_praktikum.php?kategori=$praktikum';
    </script>";
?>