<?php
session_start();

if (isset($_POST['submit'])) {
    $per = $_POST['periode'];
    $pra = $_POST['praktikum'];
    $kls = $_POST['kelas'];
}
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

        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Absensi Praktikum</h2>
                <p class="lead">
                    Persentasi kehadiran mahasiswa pada kegiatan Praktikum Laboratorium Teknik Informatika ITENAS
                </p>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms" align="center">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#AbsensiModal">
                        Tampilkan Absensi
                    </button>
                </div>
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="600ms">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="table_id"
                           width="100%">
                        <thead>
                            <tr>
                                <th>
                                    NRP
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Presentase Kehadiran (%)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './query/tabel_absensi.php';
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    NRP
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Presentase Kehadiran (%)
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
                $('#table_id').DataTable();
            });
        </script>
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["periode"].value;
                if (x == null || x == "") {
                    alert('Silakan Pilih Periode Terlebih Dahulu');
                    return false;
                }
                var y = document.forms["myForm"]["praktikum"].value;
                if (y == null || y == "") {
                    alert('Silakan Pilih Nama Praktikum Terlebih Dahulu');
                    return false;
                }
                var z = document.forms["myForm"]["kelas"].value;
                if (z == null || z == "") {
                    alert('Silakan Pilih Kelas Terlebih Dahulu');
                    return false;
                }

            }
        </script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="AbsensiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form onsubmit="return validateForm()" name="myForm" class="form-horizontal row-fluid" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="basicinput">Periode</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" name="periode" id="per">
                                        <option value="">Select here..</option>
                                        <option value="1516">2015/2016</option>
                                        <option value="1617">2016/2017</option>
                                        <option value="1718">2017/2018</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Praktikum</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" name="praktikum" id="pra">
                                        <option value="">Select here..</option>
                                        <option value="PEMDAS">Pemrograman Dasar</option>
                                        <option value="ORKOM">Organisasi & Arsitektur Komputer</option>
                                        <option value="JARKOM">Jaringan Komputer</option>
                                        <option value="PRC">Pemrograman Robot Cerdas</option>
                                        <option value="REKWEB">Rekayasa Web</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Kelas</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" name="kelas" id="kls">
                                        <option value="">Select here..</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                            </div>
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