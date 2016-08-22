<?php
include "../koneksi/koneksi.php";
 session_start();
 $CekSerial = mysql_query("select serial_num from barang where serial_num='$_POST[serial_num]'");
 $SerialNum = mysql_num_rows($CekSerial);
 if($SerialNum > 0){
 	$_SESSION['pesan'] = 'Serial Num Sudah Ada!, Data Gagal Disimpan';
 }
 else{
  // Simpan ke Database
  $Date = date("Y-m-d");
  $Time = gmdate("H:i:s",time()+60*60*7);
  $sql = "insert into barang (serial_num,nama,status,developer,lokasi,type,model,last_update,no_pelabelan,ketersediaan) values ('$_POST[serial_num]','$_POST[nama]','OK','$_POST[developer]','$_POST[lokasi]','$_POST[type]','$_POST[model]','$Date $Time','$_POST[no_pelabelan]','TERSEDIA')";
  mysql_query($sql);

  /*echo"<script>alert('Produk Berhasil disimpan!');history.go(-1);</script>";*/
   
    $_SESSION['pesan'] = 'Data Anda Berhasil Disimpan!';
    /*echo '<script>window.location="homeweb_user.php"</script>';*/
 }
header('location:../PenambahanInventaris.php');
?>