<?php
session_start();
include "../koneksi.php";
$praktikum = $_POST[kategori];
$periode = $_POST[th1] . "/" . $_POST[th2];

echo $_SESSION[kode];
echo '<br>';
echo $praktikum;
echo '<br>';
echo $periode;


mysql_query("INSERT INTO requestpraktikan (nrp,status,nama_praktikum,periode) VALUES ($_SESSION[kode],'Praktikan','$praktikum','$periode')");
echo"
    <script>
            alert('Permintaan anda sedang diproses. Mohon tunggu konfirmasi selanjutnya !');
            window.location.href='../Lab_Praktikum.php?kategori=$praktikum';
    </script>";
$_SESSION['praktikan'] = "true";
?>