<?php
include 'koneksi.php';
$nrp = '';
$nrp = $_SESSION['kode'];
$q2 = mysql_query("SELECT count(*) as jml FROM pemberitahuan WHERE status='D' AND user='$nrp'");
$r2 = mysql_fetch_array($q2);
?>
<!-- Navbar User (Mahasiswa)-->
<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar Lab <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="user_inventaris.php">Inventaris</a></li>
                        <li><a href="info_jadwal_lab.php">Jadwal Penggunaan Lab</a></li>
                        <li><a href="monitoring.php">Monitoring</a></li>
                        <li><a href="user_peminjaman_penelitian.php">Peminjaman Penelitian</a></li>
                        <li><a href="info_topik_TA.php">Topik TA</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar Praktikum <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="absensi.php">Absensi</a></li>
                        <li><a href="info_daftar_nilai.php">Daftar Nilai</a></li>
                        <li><a href="info_jadwal_praktikum.php">Jadwal Praktikum</a></li>
                        <li><a href="arsip.php">Modul & Jobsheet</a></li>                        
                        <li><a href="praktikum.php">Praktikum</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                        if ($r2['jml'] != 0) {
                            echo "" . $_SESSION['username'] . "  (" . $r2['jml'] . ")";
                        } else {
                            echo "" . $_SESSION['username'];
                        }
                        ?> 
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="pemberitahuan.php">
                                Notifikasi
                                <?php
                                if ($r2['jml'] != 0) {
                                    echo "<span class='badge'>" . $r2['jml'] . "</span>";
                                }
                                ?>
                            </a>
                        </li>
                        <?php
                        $q1 = mysql_query("SELECT * FROM asisten WHERE approve='Y' AND nrp=$nrp");
                        $r1 = mysql_fetch_array($q1);
                        if (!empty($r1)) {
                            echo "<li><a href='#' data-toggle='modal' data-target='#AsistenModal'>Asisten Lab</a></li>";
                        }
                        ?>
                        <li><a href="#" data-toggle="modal" data-target="#PeminjamanModal">Peminjaman</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="process/logout_proses.php">Logout</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

<!-- Modal -->
<div class="modal fade" id="AsistenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <h4 align="center">Verifikasi Halaman Asisten Laboratorium</h4>
            <p align="center"><br>Laboratorium mana yang ingin anda akses ?<br></p>
            <br>
            <div align="center">
                <div class="btn-group-vertical" style="width: 50%;">
                    <?php
                    $kode = $_SESSION['kode'];
                    $query = "SELECT * FROM asisten WHERE approve='Y' AND nrp=$kode";
                    $hasil = mysql_query($query);
                    while ($row = mysql_fetch_array($hasil)) {
                        $praktikum = $row['praktikum'];
                        $periode = $row['periode'];
                        echo "<a href='asisten.php?kategori=$praktikum&&periode=$periode' class='btn btn-default'>" . $praktikum . " " . $periode . "</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="PeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <h4 align="center">Verifikasi Halaman Peminjaman Barang</h4>
            <p align="center"><br>Peminjaman kategori apakah yang ingin anda lihat ?<br></p>
            <br>
            <div align="center">
                <div class="btn-group-vertical" style="width: 50%;">
                    <a href="info_peminjaman_penelitian.php" class="btn btn-default">Peminjaman Penelitian</a>
                    <a href="info_peminjaman_praktikum.php" class="btn btn-default">Peminjaman Praktikum</a>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->