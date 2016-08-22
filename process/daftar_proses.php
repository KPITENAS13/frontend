<?php

include "../koneksi.php";

$id = $_POST['kode'];
$Lid = strlen($id);
$sandi = $_POST['sandi'];
$pass = $sandi;


if ($Lid == 4) {
    if (mysql_query("INSERT INTO dosen VALUES('$id','$pass','$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]')")) {
        echo"
	<script>
		alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
		window.location.href='../index.php';
	</script>";
    } else {
        echo"
	<script>
		alert('NID telah terdaptar. Silakan minta password ke teknisi jika lupa...!');
		window.location.href='../index.php';
	</script>";
    }
} else {
    if (mysql_query("INSERT INTO mahasiswa (id,pin,nama,jk,tgl_lahir,no_telp,alamat) VALUES($id,$pass,'$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]')")) {
        echo"
	<script>
		alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
		window.location.href='../index.php';
	</script>";
    } else {
        echo"
	<script>
		alert('NRP telah terdaptar. Silakan minta password ke teknisi jika lupa...!');
		window.location.href='../index.php';
	</script>";
    }
}
?>