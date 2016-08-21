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
        <title>Lab Praktikum | Lab IF</title>

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
        <link rel="shortcut icon" href="images/ico/icon.png">
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
                <h2>
                    Laboratorium 
                    <?php
                    if ($_POST[kategori] == "PEMDAS") {
                        echo 'Pemrograman Dasar';
                    } else if ($_POST[kategori] == "ORKOM") {
                        echo 'Organisasi & Arsitektur Komputer';
                    } else if ($_POST[kategori] == "PBD") {
                        echo 'Pemrograman Basis Data';
                    } else if ($_POST[kategori] == "PRC") {
                        echo 'Pemrograman Robot Cerdas';
                    } else if ($_POST[kategori] == "JARKOM") {
                        echo 'Jaringan Komputer';
                    } else if ($_POST[kategori] == "REKWEB") {
                        echo 'Rekayasa Web';
                    } else if ($_POST[kategori] == "JST") {
                        echo 'Jaringan Syaraf Tiruan';
                    } else if ($_POST[kategori] == "BASDAT") {
                        echo 'Basis Data';
                    } else if ($_POST[kategori] == "PBO") {
                        echo 'Pemrograman Berorientasi Objek';
                    }
                    echo ' Periode ' . $_POST[periode];
                    ?>
                </h2>
                <p class="lead">
                    Pusat informasi kegiatan praktikum Laboratorium Teknik Informatika ITENAS
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="300ms">
                        <?php include './comp/koor_kelas.php'; ?>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="600ms">
                        <?php include './comp/koor_praktikum.php'; ?>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="900ms">
                        <?php include './comp/koor_lab.php'; ?>
                    </div>
                </div>
            </div>
        </section>  <!--/gmap_area -->

        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Peserta Praktikum</h2>
                <p class="lead">
                    Nama mahasiswa yang terdaftar untuk mengikuti praktikum Laboratorium
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-12 wow fadeInDown" data-wow-delay="300ms" align="center">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#PeriodeModal" id="tombol" style="display: none;" data-backdrop="static" data-keyboard="false">
                            Hiden Button
                        </button>
                        <?php
                        include './koneksi.php';
                        $query = "select approve from praktikum WHERE prak='$_POST[kategori]' AND periode='$_POST[periode]' AND nrp=$_SESSION[kode]";
                        $hasil = mysql_query($query);
                        $row = mysql_fetch_array($hasil);
                        if ($row['approve'] == "") {
                            echo '
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#DaftarModal" id="tombol">
                                Daftar Sebagai Peserta
                            </button>';
                        } else if ($row['approve'] == "R") {
                            echo '
                            <button class="btn btn-primary btn-lg" disabled>
                                Permintaan Sedang Diproses
                            </button>';
                        } else if ($row['approve'] == "Y") {
                            echo '
                            <button class="btn btn-primary btn-lg" >
                                Peminjaman Peralatan Praktikum
                            </button>';
                        }
                        ?>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="tabel1"
                               width="100%">
                            <thead>
                                <tr>
                                    <th>
                                        NRP
                                    </th>
                                    <th>
                                        Periode
                                    </th>
                                    <th>
                                        Kelas
                                    </th>
                                    <th>
                                        Nilai Harian
                                    </th>
                                    <th>
                                        UTS
                                    </th>
                                    <th>
                                        UAS
                                    </th>
                                    <th>
                                        Project
                                    </th>
                                    <th>
                                        Absen
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    <th>
                                        Nilai
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './query/tabel_praktikum.php';
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        NRP
                                    </th>
                                    <th>
                                        Periode
                                    </th>
                                    <th>
                                        Kelas
                                    </th>
                                    <th>
                                        Nilai Harian
                                    </th>
                                    <th>
                                        UTS
                                    </th>
                                    <th>
                                        UAS
                                    </th>
                                    <th>
                                        Project
                                    </th>
                                    <th>
                                        Absen
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    <th>
                                        Nilai
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
                var periode = '<?php echo $_POST[periode]; ?>';
                if (periode == "") {
                    $('#tombol').click();
                }
            });
        </script>
    </body>
</html

<!-- Modal -->
<div class="modal fade" id="DaftarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="formlogin" method="post" action="process/daftar_praktikan_proses.php" onsubmit="return validasi(this)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
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
                <input type="hidden" name="kategori" value="<?php echo $_POST[kategori]; ?>">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="PeriodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<!-- Modal -->
<div class="modal fade" id="AslabModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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