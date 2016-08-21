<?php

include "../koneksi.php";

$id = $_POST['id'];
$Lid = strlen($id);
$sandi = $_POST['sandi'];
$pass = $sandi;


if($Lid == 4){
	mysql_query("INSERT INTO dosen VALUES('$id','$pass','$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]')");
	echo"
	<script>
		alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
		window.location.href='../login.php';
	</script>";
} else{
	mysql_query("INSERT INTO mahasiswa VALUES('$id','$pass','$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]')");
	echo"
	<script>
		alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
		window.location.href='../login.php';
	</script>";
}


?>