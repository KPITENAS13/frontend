<?php

include 'koneksi.php';
$kategori = $_GET['kategori'];
$periode = $_GET['periode'];
$query = "SELECT * FROM openregister WHERE praktikum='$kategori' AND periode='$periode'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
if(!empty($row['cv'])){
    echo "- Curriculum Vitae (CV) <br>";
}
if(!empty($row['transkrip'])){
    echo "- Transkrip Nilai <br>";
}
if(!empty($row['foto'])){
    echo "- Foto <br>";
}
if(!empty($row['note'])){
    echo "<br> Catatan : <br>";
    echo $row['note'] . " <br>";
}
?>