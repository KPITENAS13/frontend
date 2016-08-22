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
                        } else if ($_SESSION['kategori'] == "mahasiswa"){ //jika mahasiswa yang masuk
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="praktikum_Lab.php?prak=pemdas" class="btn-box big span4"><i class=" icon-random"></i><b>PEMDAS</b>
                                        <p class="text-muted">Pemrograman Dasar</p>
                                    </a>
                                    <a href="praktikum_Lab.php?prak=orkom" class="btn-box big span4"><i class="icon-user"></i><b>ORKOM</b>
                                        <p class="text-muted">Organisasi & Arsitektur Komputer</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class="icon-money"></i><b>PRC</b>
                                        <p class="text-muted">Pemrograman Robot Cerdas</p>
                                    </a>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>JARKOM</b>
                                        <p class="text-muted">Jaringan Komputer</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class="icon-user"></i><b>REKWEB</b>
                                        <p class="text-muted">Rekayasa Web</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class="icon-money"></i><b>JST</b>
                                        <p class="text-muted">Jaringan Syaraf Tiruan</p>
                                    </a>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>BASDAT</b>
                                        <p class="text-muted">Basis Data</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class="icon-user"></i><b>PBO</b>
                                        <p class="text-muted">Pemrograman Berorientasi Objek</p>
                                    </a>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
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

    </body>