<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "UPDATE praktikum SET approve='Y' WHERE nrp=" . $nrp . "  AND prak='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data telah dimasukkan kedalam Daftar Nilai Praktikan';
}
?>  