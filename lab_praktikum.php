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
        <title>Blog Single | Corlate</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else {
                include './comp/navbar2.php';
            }
            ?>
        </header><!--/header-->

        <section id="feature">
            <div class="center wow fadeInDown">
                <h2>Laboratorium <?php echo $_GET['kategori']; ?></h2>
                <p class="lead">
                    Pusat informasi kegiatan praktikum Laboratorium Teknik Informatika ITENAS
                </p>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">

                </div>
            </div>
        </section>  <!--/gmap_area -->

        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Peserta Praktikum</h2>
                <p class="lead">
                    Nama mahasiswa yang mengikuti praktikum
                </p>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms" align="center">
                    <?php
                    if ($_SESSION['praktikan'] == "false") {
                        echo
                        "<button class='btn btn-primary btn-lg' data-toggle='modal' data-target='#DaftarModal'>
                            Daftar Sebagai Peserta
                        </button>";
                    }else if($_SESSION['praktikan']=="request"){
                        echo
                        "<button class='btn btn-primary btn-lg' data-toggle='modal' data-target='#DaftarModal' disabled>
                            Permintaan Sedang Diproses
                        </button>";
                    }else if($_SESSION['praktikan']=="true"){
                        echo
                        "<button class='btn btn-primary btn-lg' data-toggle='modal' data-target='#DaftarModal'>
                            Peminjaman Barang Praktikum
                        </button>";
                    }
                    ?>
                </div>
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped" id="tabel2"
                           width="100%">
                        <thead>
                            <tr>
                                <th>
                                    Judul
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './query/tabel_topik_TA_disarankan.php';
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    Judul
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>  <!--/gmap_area -->

        <section id="bottom">
            <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Meet the team</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Refund policy</a></li>
                                <li><a href="#">Ticket system</a></li>
                                <li><a href="#">Billing system</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Developers</h3>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">SEO Marketing</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Email Marketing</a></li>
                                <li><a href="#">Plugin Development</a></li>
                                <li><a href="#">Article Writing</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Our Partners</h3>
                            <ul>
                                <li><a href="#">Adipisicing Elit</a></li>
                                <li><a href="#">Eiusmod</a></li>
                                <li><a href="#">Tempor</a></li>
                                <li><a href="#">Veniam</a></li>
                                <li><a href="#">Exercitation</a></li>
                                <li><a href="#">Ullamco</a></li>
                                <li><a href="#">Laboris</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-1.12.3.js"></script>
        <script src="datatable/media/js/jquery.dataTables.min.js"></script>
        <script src="datatable/media/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#tabel1').DataTable();
                $('#tabel2').DataTable();
            });
        </script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="DaftarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="formlogin" method="post" action="process/daftar_praktikan_proses.php" onsubmit="return validasi(this)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Daftar Peserta Praktikum</h4>
                </div>
                <div class="modal-body">
                    <p>Masukkan periode praktikum</p>
                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon">Tahun</span>
                            <input type="text" class="form-control span2" placeholder="Masukkan Tahun Pertama" maxlength="4" name="th1">
                            <span class="input-group-addon span1">/</span>
                            <span class="input-group-addon">Tahun</span>
                            <input type="text" class="form-control span2" placeholder="Masukkan Tahun Kedua" maxlength="4" name="th2">
                            <input type="hidden" name="kategori" value="<?php echo $_GET[kategori]; ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->