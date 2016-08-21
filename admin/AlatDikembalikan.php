<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>
    <body>
      <?php
        include "koneksi/koneksi.php";
        session_start();
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>
        <div class="navbar navbar-fixed-top" style="bg-color:black;">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand" href="index.html">
                        Laboratorium Teknik Informatika Itenas
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!--<form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>-->

                        <ul class="nav pull-right">
                            <!--                            <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Item No. 1</a></li>

                                                                <li><a href="#">Don't Click</a></li>
                                                                <li class="divider"></li>
                                                                <li class="nav-header">Example Header</li>
                                                                <li><a href="#">A Separated link</a></li>
                                                            </ul>
                                                        </li>-->

                            <li><a href="#">
                                    Beranda
                                </a></li>
                            <li class="nav-user dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/user.png" class="nav-avatar" />
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->



        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">

                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages1">
                                        <i class="menu-icon icon-inbox"></i>
                                        <b class="label green pull-right"><?php
                                            include "koneksi/koneksi.php";
                                            $notifp1 = mysql_query("select count(*) as jumlah from requestpraktikum where status='No'");
                                            $nfp1 = mysql_fetch_array($notifp1);
                                            $notifp2 = mysql_query("select count(*) as jumlah from requestpenelitian where status='No'");
                                            $nfp2 = mysql_fetch_array($notifp2);
                                            $result = $nfp1['jumlah'] + $nfp2['jumlah'];
                                            echo $result;
                                            ?></b>
                                        Notifikasi
                                    </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li>
                                            <a href="RequestPraktikum.php">
                                                <i class="icon-check pull-right"></i>
                                                <b class="label orange"><?php
                                                    include "koneksi/koneksi.php";
                                                    $notifp = mysql_query("select count(*) as jumlah from requestpraktikum where status='No'");
                                                    $nfp = mysql_fetch_array($notifp);
                                                    echo $nfp['jumlah'];
                                                    ?></b>
                                                Praktikum
                                            </a>
                                        </li>
                                        <li>
                                            <a href="RequestPenelitian.php">
                                                <i class="icon-check pull-right"></i>
                                                <b class="label orange"><?php
                                                    include "koneksi/koneksi.php";
                                                    $notifp = mysql_query("select count(*) as jumlah from requestpenelitian where status='No'");
                                                    $nfp = mysql_fetch_array($notifp);
                                                    echo $nfp['jumlah'];
                                                    ?></b>
                                                Penelitian
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="PengembalianAlat.php">
                                        <i class="menu-icon icon-circle-arrow-right"></i>
                                        Pengembalian Alat
                                    </a>
                                </li>
                                <li>
                                    <a href="PermintaanPerbaikan.php">
                                        <i class="menu-icon icon-barcode"></i>
                                        Permintaan Perbaikan
                                    </a>
                                </li>
                            </ul><!--/.widget-nav-->

                            <!--                            <ul class="widget widget-menu unstyled">
                                                            <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                                            <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                                            <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                                            <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                                            <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                                                        </ul>/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-book"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        Inventaris Alat
                                    </a>
                                    <ul id="togglePages" class="collapse unstyled">
					<li>
                                            <a href="HistoriAlat.php">
                                                <i class="icon-check"></i>
                                                Riwayat Peminjaman Alat
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="DataInventaris.php">
                                                <i class="icon-check"></i>
                                                Data Inventaris Alat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="PenambahanInventaris.php">
                                                <i class="icon-check"></i>
                                                Penambahan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="PembaharuanInventaris.php">
                                                <i class="icon-check"></i>
                                                Pembaharuan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="PenghapusanInventaris.php">
                                                <i class="icon-check"></i>
                                                Penghapusan
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-signout"></i>
                                        Keluar
                                    </a>
                                </li>
                            </ul>

                        </div><!--/.sidebar-->
                    </div><!--/.span3-->


                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>Pengembalian Alat</h3>
                                </div>
                                <div class="module-body">
                                    <?php
                                    include "koneksi/koneksi.php";
                                    $edit = mysql_query("SELECT * FROM peminjaman WHERE id_peminjaman ='$_GET[kode_pinjam]' and kode_barang ='$_GET[kode_barang]'");
                                    $r = mysql_fetch_array($edit);

                                    $hasil = (string) strlen($r['kode_peminjam']);
                                    $nm = '';
                                    $stat = '';
                                    if ($hasil > 5) {
                                        $nama = mysql_query("select * from mahasiswa where id=$r[kode_peminjam]");
                                        $n = mysql_fetch_array($nama);
                                        $nm = $n['nama'];
                                        $stat = 'Mahasiswa';
                                    } else {
                                        $nama = mysql_query("select nama from dosen where nid=$r[kode_peminjam]");
                                        $n = mysql_fetch_array($nama);
                                        $nm = $n['nama'];
                                        $stat = 'Dosen';
                                    }

                                    echo "
                                    <form class=form-horizontal row-fluid action=query/kembalikanAlat.php method=post>
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Kode Pinjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[id_peminjaman] class=span2 disabled>
                                                <input type=hidden name=inputKode_pinjam value=$r[id_peminjaman] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Id Peminjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[kode_peminjam] class=span2 disabled>
                                                <input type=hidden name=inputId_peminjam value=$r[kode_peminjam] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Nama Peminjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$nm class=span2 disabled>
                                            </div> </br>
                                            <label class=control-label for=basicinput>Tipe Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[type_peminjaman] class=span2 disabled>
                                                <input type=hidden name=inputTipe_pinjam value=$r[type_peminjaman] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Tanggal Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[tgl_pinjam] class=span2 disabled>
                                                <input type=hidden name=inputTanggal_pinjam value=$r[tgl_pinjam] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Serial Number</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[kode_barang] class=span2 disabled>
                                                <input type=hidden name=inputKode_barang value=$r[kode_barang] class=span2 >
                                            </div>
                                        </div>
                                        
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Kondisi Kembali</label>
                                            <div class=controls>
                                                <select class=span2 name=kondisi required>
                                                    <option value='' selected>-- Pilih --</option>								 						   	   
                                                    <option value=Baik>Baik</option>								 						   	   
                                                    <option value=Buruk>Buruk</option>
                                                </select> 
                                            </div>
                                        </div>
                                        </br>	
                                        <div class=control-group>
                                            <div class=controls>
                                                <button type=submit class=btn-warning>Kembalikan</button>
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
            </div><!--/.container-->
        </div><!--/.wrapper-->

        <div class = "footer">
            <div class = "container">


                <b class = "copyright">&copy;
                    2014 Edmin - EGrappler.com </b> All rights reserved.
            </div>
        </div>

        <script src = "scripts/jquery-1.9.1.min.js"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="scripts/datatables/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $('.datatable-1').dataTable();
                $('.dataTables_paginate').addClass("btn-group datatable-pagination");
                $('.dataTables_paginate > a').wrapInner('<span />');
                $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
                $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
            });
        </script>
        <script src="scripts/jquery.min.js"></script>
    </body>