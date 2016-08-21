<?php

include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$digit = strlen($username);

if ($digit == 4) { //cek digit untuk dosen
    $query = "select * from dosen WHERE nid = '$username' AND sandi = '$password'";
    $hasil = mysql_query($query);
    $row = mysql_fetch_array($hasil);
    if ($row['nid'] == $username AND $row['sandi'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        $_SESSION['kode'] = $row['nid'];
        $_SESSION['kategori'] = "dosen";
        header("location:../index.php");
    } else {
        echo "<script>window.history.back(-1);"
        . "alert('Maaf ID atau Kata sandi salah !');"
        . "</script>";
    }
} else if ($digit == 9) { //cek digit mahasiswa
    $query = "select * from mahasiswa WHERE id = '$username' AND pin = '$password'";
    //$query2 = "select * from praktikan WHERE nrp = '$username'";
    //$hasil2 = mysql_query($query2);
    $hasil = mysql_query($query);
    $row = mysql_fetch_array($hasil);
    //$row2 = mysql_fetch_array($hasil2);
    if ($row['id'] == $username AND $row['pin'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        $_SESSION['kode'] = $row['id'];
        $_SESSION['praktikan'] = $row['praktikan'];
        $_SESSION['kategori'] = "mahasiswa";
        header("location:../index.php");
    } else {
        echo "<script>window.history.back(-1);"
        . "alert('Maaf ID atau Kata sandi salah !');"
        . "</script>";
    }
} else if($username == "admin" && $password == "admin"){
    session_start();
    $_SESSION['username'] = "Admin";
    $_SESSION['kategori'] = "admin";
    header("location:../admin/index.php");
} else {
    header("location:../index.php");
    echo "<script>window.history.back(-1);"
        . "alert('Maaf ID atau Kata sandi tidak terdaftar !');"
        . "</script>";
}
?>