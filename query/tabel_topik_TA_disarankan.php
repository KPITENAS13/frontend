<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM topik_ta where status='disarankan'");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[judul]</td>
        </tr>";
}
?>