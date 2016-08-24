<?php

include './koneksi.php';

$praktikum = $_GET['kategori'];
$periode = $_GET['periode'];


$q = mysql_query("SELECT * FROM praktikum,mahasiswa where prak='$praktikum' AND periode='$periode' AND approve='Y' AND praktikum.nrp=mahasiswa.id");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td align='center'>$r[kelas]</td>
            <td>$r[total]</td>
        </tr>";
}
?>