<?php

session_start();
include "../koneksi.php";

if(isset($_POST['kategori'])) {
    $praktikum = $_POST['kategori'];
    $periode = $_POST['periode'];
    $nrp = $_SESSION['kode'];
}

mysql_query("INSERT INTO praktikum (nrp,prak,periode,approve) VALUES ($nrp,'$praktikum','$periode','R')");
echo"
    <script>
            alert('Permintaan anda sedang diproses. Mohon tunggu konfirmasi selanjutnya !');
            window.location.href='../lab_praktikum.php?kategori=$praktikum&&periode=$periode';
    </script>";

echo $praktikum;
echo $periode;
echo $nrp;
?>