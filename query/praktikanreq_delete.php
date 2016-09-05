<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "DELETE FROM praktikum WHERE nrp=" . $nrp . "  AND prak='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query($connect, $sql)) {
    echo 'Data telah dihapus.';
}
?>