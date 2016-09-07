<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab IF</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        include "koneksi/koneksi.php";
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner"> 
                <?php
                if (empty($_SESSION['username'])) {
                    include './components/navbar1.php';
                } else {
                    include './components/navbar2.php';
                }
                ?>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php
                        if (empty($_SESSION['kategori'])) { //kategori kosong = guest
                            include './components/sidebar1.php';
                        } else if ($_SESSION['kategori'] == "admin") { //jika admin yang masuk
                            include './components/sidebar4.php';
                        } else if ($_SESSION['kategori'] == "dosen") { //jika dosen yang masuk
                            include './components/sidebar2.php';
                        } else if ($_SESSION['kategori'] == "mahasiswa") { //jika mahasiswa yang masuk
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>Peminjaman Alat</h3>
                                </div>
                                <div class="module-body">
                                    <?php
                                    include "koneksi/koneksi.php";
                                    $edit = mysql_query("SELECT * FROM requestpenelitian WHERE kode_pinjam ='$_GET[kode_pinjam]'");
                                    $r = mysql_fetch_array($edit);

                                    $hasil = (string) strlen($r['id_peminjam']);
                                    $nm = '';
                                    $stat = '';
                                    if ($hasil > 5) {
                                        $nama = mysql_query("select * from mahasiswa where id=$r[id_peminjam]");
                                        $n = mysql_fetch_array($nama);
                                        $nm = $n['nama'];
                                        $stat = 'Mahasiswa';
                                    } else {
                                        $nama = mysql_query("select nama from dosen where nid=$r[id_peminjam]");
                                        $n = mysql_fetch_array($nama);
                                        $nm = $n['nama'];
                                        $stat = 'Dosen';
                                    }

                                    echo "
                                    <form class=form-horizontal row-fluid name=frm action=query/PenelitianApprove.php method=post>
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Kode Pinjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[kode_pinjam] class=span4 disabled>
                                                <input type=hidden name=inputKode_pinjam value=$r[kode_pinjam] class=span4 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Id Peminjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[id_peminjam] class=span4 disabled>
                                                <input type=hidden name=inputId_peminjam value=$r[id_peminjam] class=span4 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Nama Peminjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='$nm' class=span4 disabled>
                                            </div> </br>
                                            <label class=control-label for=basicinput>Tipe Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=Penelitian class=span4 disabled>
                                                <input type=hidden name=inputTipe_pinjam value=Penelitian class=span4 >
                                            </div>
                                        </div>
                                        
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Nama Alat </label><label class=control-label for=basicinput></label></br></br>
                                            ";
                                    $a1 = $r['alat1'];
                                    $a2 = $r['alat2'];
                                    $a3 = $r['alat3'];
                                    $a4 = $r['alat4'];
                                    $a5 = $r['alat5'];
                                    $a6 = $r['alat6'];
                                    $a7 = $r['alat7'];
                                    $a8 = $r['alat8'];
                                    $a9 = $r['alat9'];
                                    $a10 = $r['alat10'];

                                    $KodeBarang1 = $a1;
                                    $Posisi1 = strpos($KodeBarang1, "-");

                                    $KodeBarang2 = $a2;
                                    $Posisi2 = strpos($KodeBarang2, "-");

                                    $KodeBarang3 = $a3;
                                    $Posisi3 = strpos($KodeBarang3, "-");

                                    $KodeBarang4 = $a4;
                                    $Posisi4 = strpos($KodeBarang4, "-");

                                    $KodeBarang5 = $a5;
                                    $Posisi5 = strpos($KodeBarang5, "-");

                                    $KodeBarang6 = $a6;
                                    $Posisi6 = strpos($KodeBarang6, "-");

                                    $KodeBarang7 = $a7;
                                    $Posisi7 = strpos($KodeBarang7, "-");

                                    $KodeBarang8 = $a8;
                                    $Posisi8 = strpos($KodeBarang8, "-");

                                    $KodeBarang9 = $a9;
                                    $Posisi9 = strpos($KodeBarang9, "-");

                                    $KodeBarang10 = $a10;
                                    $Posisi10 = strpos($KodeBarang10, "-");


                                    if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null) and ( $a8 <> null) and ( $a9 <> null) and ( $a10 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt4 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>";

                                        if ($Posisi5) {
                                            echo"
                                                <input type=text id=basicinput value='$a5' placeholder='$a5' name=txt5 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a5' name=txt5 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat5Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat5();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-6</label>
                                            <div class=controls>";

                                        if ($Posisi6) {
                                            echo"
                                                <input type=text id=basicinput value='$a6' placeholder='$a6' name=txt6 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a6' name=txt6 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat6Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat6();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-7</label>
                                            <div class=controls>";

                                        if ($Posisi7) {
                                            echo"
                                                <input type=text id=basicinput value='$a7' placeholder='$a7' name=txt7 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a7' name=txt7 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat7Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat7();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-8</label>
                                            <div class=controls>";

                                        if ($Posisi8) {
                                            echo"
                                                <input type=text id=basicinput value='$a8' placeholder='$a8' name=txt8 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a8' name=txt8 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat8Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat8();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-9</label>
                                            <div class=controls>";

                                        if ($Posisi9) {
                                            echo"
                                                <input type=text id=basicinput value='$a9' placeholder='$a9' name=txt9 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a9' name=txt9 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat9Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat9();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-10</label>
                                            <div class=controls>";

                                        if ($Posisi10) {
                                            echo"
                                                <input type=text id=basicinput value='$a10' placeholder='$a10' name=txt10 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a10' name=txt10 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat10Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat10();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null) and ( $a8 <> null) and ( $a9 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>";

                                        if ($Posisi5) {
                                            echo"
                                                <input type=text id=basicinput value='$a5' placeholder='$a5' name=txt5 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a5' name=txt5 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat5Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat5();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-6</label>
                                            <div class=controls>";

                                        if ($Posisi6) {
                                            echo"
                                                <input type=text id=basicinput value='$a6' placeholder='$a6' name=txt6 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a6' name=txt6 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat6Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat6();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-7</label>
                                            <div class=controls>";

                                        if ($Posisi7) {
                                            echo"
                                                <input type=text id=basicinput value='$a7' placeholder='$a7' name=txt7 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a7' name=txt7 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat7Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat7();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-8</label>
                                            <div class=controls>";

                                        if ($Posisi8) {
                                            echo"
                                                <input type=text id=basicinput value='$a8' placeholder='$a8' name=txt8 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a8' name=txt8 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat8Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat8();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-9</label>
                                            <div class=controls>";

                                        if ($Posisi9) {
                                            echo"
                                                <input type=text id=basicinput value='$a9' placeholder='$a9' name=txt9 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a9' name=txt9 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat9Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat9();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null) and ( $a8 <> null)) {
                                        echo"
                                             <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt4 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>";

                                        if ($Posisi5) {
                                            echo"
                                                <input type=text id=basicinput value='$a5' placeholder='$a5' name=txt5 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a5' name=txt5 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat5Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat5();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-6</label>
                                            <div class=controls>";

                                        if ($Posisi6) {
                                            echo"
                                                <input type=text id=basicinput value='$a6' placeholder='$a6' name=txt6 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a6' name=txt6 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat6Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat6();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-7</label>
                                            <div class=controls>";

                                        if ($Posisi7) {
                                            echo"
                                                <input type=text id=basicinput value='$a7' placeholder='$a7' name=txt7 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a7' name=txt7 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat7Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat7();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-8</label>
                                            <div class=controls>";

                                        if ($Posisi8) {
                                            echo"
                                                <input type=text id=basicinput value='$a8' placeholder='$a8' name=txt8 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a8' name=txt8 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat8Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat8();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt4 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>";

                                        if ($Posisi5) {
                                            echo"
                                                <input type=text id=basicinput value='$a5' placeholder='$a5' name=txt5 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a5' name=txt5 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat5Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat5();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-6</label>
                                            <div class=controls>";

                                        if ($Posisi6) {
                                            echo"
                                                <input type=text id=basicinput value='$a6' placeholder='$a6' name=txt6 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a6' name=txt6 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat6Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat6();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-7</label>
                                            <div class=controls>";

                                        if ($Posisi7) {
                                            echo"
                                                <input type=text id=basicinput value='$a7' placeholder='$a7' name=txt7 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a7' name=txt7 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat7Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat7();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls> ";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt4 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>";

                                        if ($Posisi5) {
                                            echo"
                                                <input type=text id=basicinput value='$a5' placeholder='$a5' name=txt5 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a5' name=txt5 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat5Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat5();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-6</label>
                                            <div class=controls>";

                                        if ($Posisi6) {
                                            echo"
                                                <input type=text id=basicinput value='$a6' placeholder='$a6' name=txt6 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a6' name=txt6 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat6Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat6();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt4 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>";

                                        if ($Posisi5) {
                                            echo"
                                                <input type=text id=basicinput value='$a5' placeholder='$a5' name=txt5 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a5' name=txt5 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat5Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat5();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt3 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>";

                                        if ($Posisi4) {
                                            echo"
                                                <input type=text id=basicinput value='$a4' placeholder='$a4' name=txt4 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a4' name=txt4 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat4Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat4();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            
                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>";

                                        if ($Posisi3) {
                                            echo"
                                                <input type=text id=basicinput value='$a3' placeholder='$a3' name=txt3 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a3' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat3Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat3();><i class=icon-check name=btn> Kosong</i></button>
                                            
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null) and ( $a2 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls> ";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br> 
                                        <label class = control-label for = basicinput>Alat Ke-2</label>
                                        <div class = controls> ";

                                        if ($Posisi2) {
                                            echo"
                                                <input type=text id=basicinput value='$a2' placeholder='$a2' name=txt2 class=span5 required>";
                                        } else {
                                            echo"
                                            <input type=text id=basicinput placeholder='$a2' name=txt2 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat2Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat2();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    } else if (($a1 <> null)) {
                                        echo"
                                            <label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls> ";

                                        if ($Posisi1) {
                                            echo"
                                                <input type=text id=basicinput value='$a1' placeholder='$a1' name=txt1 class=span5 required> ";
                                        } else {
                                            echo"
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class=span5 required> ";
                                        }
                                        echo"
                                                <a href=PeminjamanAlat1Penelitian.php?kode_pinjam=$r[kode_pinjam]&id_peminjam=$r[id_peminjam]&tipe_pinjam=Penelitian><button type=button class=btn-inverse><i class=icon-book name=btn></i></button></a>
                                                <button type=button class=btn-inverse onClick=Alat1();><i class=icon-check name=btn> Kosong</i></button>
                                            </div></br>
                                            ";
                                    }

                                    echo"
                                        </div>
                                        </br>	
                                        <div class=control-group>
                                            <div class=controls>
                                                <button type=submit class=btn-warning>Selesai</button>
                                            </div>
                                        </div>
                                    </form> ";
                                    ?>                   
                                </div>
                            </div><!--/.module-->
                            <br />
                        </div><!--/.content-->
                    </div><!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
        <script src="scripts/jquery.min.js"></script>
        <script>
            function Alat1() {
                var text;
                text = "Kosong";
                document.frm.txt1.value = text;
            }
            function Alat2() {
                var text;
                text = "Kosong";
                document.frm.txt2.value = text;
            }
            function Alat3() {
                var text;
                text = "Kosong";
                document.frm.txt3.value = text;
            }
            function Alat4() {
                var text;
                text = "Kosong";
                document.frm.txt4.value = text;
            }
            function Alat5() {
                var text;
                text = "Kosong";
                document.frm.txt5.value = text;
            }
            function Alat6() {
                var text;
                text = "Kosong";
                document.frm.txt6.value = text;
            }
            function Alat7() {
                var text;
                text = "Kosong";
                document.frm.txt7.value = text;
            }
            function Alat8() {
                var text;
                text = "Kosong";
                document.frm.txt8.value = text;
            }
            function Alat9() {
                var text;
                text = "Kosong";
                document.frm.txt9.value = text;
            }
            function Alat10() {
                var text;
                text = "Kosong";
                document.frm.txt10.value = text;
            }
        </script>
    </body>
</html>