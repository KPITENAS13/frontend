<?php

include "../koneksi.php";
$id = $_GET['id'];
$kategori = $_GET['praktikum'];
$periode = $_GET['periode'];
$sql = mysql_query("select kode from koordinator where id=$id");
$row = mysql_fetch_array($sql);
$kode = $row['kode'];
if (mysql_query("DELETE FROM koordinator WHERE id=$id")) {
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Maaf ! Anda telah diberhentikan menjadi Koordinator Praktikum Laboratorium $kategori periode $periode";
    mysql_query("insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");
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