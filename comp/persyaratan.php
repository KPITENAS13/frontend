<?php

include 'koneksi.php';
$query = "SELECT * FROM openregister WHERE praktikum='$_GET[kategori]' AND periode='$_GET[periode]'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
if(!empty($row[cv])){
    echo "- Curriculum Vitae (CV) <br>";
}
if(!empty($row[transkrip])){
    echo "- Transkrip Nilai <br>";
}
if(!empty($row[foto])){
    echo "- Foto <br>";
}
if(!empty($row[note])){
    echo "<br> Catatan : <br>";
    echo $row[note] . " <br>";
}
?>