<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Praktikum | Lab IF</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body class="homepage">
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else if ($_SESSION['kategori'] == "mahasiswa") {
                include './comp/navbar2.php';
            } else if ($_SESSION['kategori'] == "dosen") {
                include './comp/navbar3.php';
            }
            ?>
        </header><!--header-->

        <section id="services" class="service-item">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Praktikum</h2>
                    <p class="lead">
                        Halaman informasi kegiatan praktikum Laboratorium Teknik Informatika ITENAS
                    </p>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PEMDAS">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services1.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PEMDAS</h3>
                                    <p>Pemrograman <br> Dasar</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=ORKOM">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services2.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">ORKOM</h3>
                                    <p>Organisasi & Arsitektur Komputer</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PRC">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services3.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PRC</h3>
                                    <p>Pemrograman <br> Robot Cerdas</p>
                                </div>
                            </div>
                        </a>
                    </div>  

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=JARKOM">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services4.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">JARKOM</h3>
                                    <p>Jaringan <br> Komuputer</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=REKWEB">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services5.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">REKWEB</h3>
                                    <p>Rekayasa <br> Web</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=JST">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services6.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">JST</h3>
                                    <p>Jaringan Syaraf <br> Tiruan</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=BASDAT">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services7.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">BASDAT</h3>
                                    <p>Basis <br> Data</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PBD">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services8.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PBD</h3>
                                    <p>Pemrograman <br> Basis Data</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PBO">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services9.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PBO</h3>
                                    <p>Pemrograman <br> Berorientasi Objek</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#services-->      

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="PemdasModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <form name="formlogin" method="post" action="process/daftar_aslab_proses.php" onsubmit="return validasi(this)">
                <h4>Verifikasi Pendaftaran Asisten Laboratorium</h4>
                <p align="center"><br>Apakah anda yakin ingin mendaftarkan diri sebagai Asisten Labortorium ?<br></p>
                <p align="center">
                    <br>
                    <input type="hidden" name="periode" value="<?php echo $_POST[periode]; ?>">
                    <input type="hidden" name="kategori" value="<?php echo $_POST[kategori]; ?>">
                    <button type="submit" class="btn btn-success" style="width: 30%;">Proses</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger" aria-hidden="true" style="width: 30%;">Batal</button>
                </p>
            </form>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="PemdasModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="formlogin" method="post" action="lab_praktikum.php" onsubmit="return validasi(this)">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Pilih periode praktikum terlebih dahulu</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label" for="basicinput">Periode</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="form-control" name="periode" id="per">
                                <option value="">Select here..</option>
                                <option value="2015/2016">2015/2016</option>
                                <option value="2016/2017">2016/2017</option>
                                <option value="2017/2018">2017/2018</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="kategori" value="<?php echo $_GET[kategori]; ?>">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->