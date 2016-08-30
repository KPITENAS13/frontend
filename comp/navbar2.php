<?php
include 'koneksi.php';
$ha = mysql_query("SELECT * FROM asisten WHERE approve='Y' AND nrp=$_SESSION[kode]");
$ro = mysql_fetch_array($ha);
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
                        <li><a href="#">Daftar Nilai</a></li>
                        <li><a href="info_jadwal_praktikum.php">Jadwal Praktikum</a></li>
                        <li><a href="arsip.php">Modul & Jobsheet</a></li>                        
                        <li><a href="praktikum.php">Praktikum</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <?php
                        if (!empty($ro)) {
                            echo "<li><a href='#' data-toggle='modal' data-target='#AsistenModal'>Asisten Lab</a></li>";
                        }
                        ?>
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Pemberitahuan</a></li>
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
                        $periode= $row['periode'];
                        echo "<a href='asisten.php?kategori=$praktikum&&periode=$periode' class='btn btn-default'>" . $praktikum . " " . $periode . "</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->