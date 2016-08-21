<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "DELETE FROM asisten WHERE nrp=" . $nrp . "  AND praktikum='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data telah dihapus.';
}
?>