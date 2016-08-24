<?php
include 'koneksi.php';
if (isset($_GET['kategori'])) {
   $kategori= $_GET["kategori"];
}
$q = mysql_query("SELECT * FROM file WHERE kategori IN ('Modul','Jobsheet')");
while ($r = mysql_fetch_array($q)) {
    $file = substr($r['path'], 3);
    $file = "admin/" . $file;
    echo "
        <tr>
            <td><a href='$file'>$r[nama_file]</a></td>
            <td>$r[tanggal_upload]</td>
            <td>
            <a href='$file'> <span class='glyphicon glyphicon-download-alt'></span> Download </a> 
            </td>
        </tr>";
}
?>